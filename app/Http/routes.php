<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio_plataforma',function ()
{
  return view('inicio_plataforma');
});

Route::get('/listar_deportistas', ['as' => 'listar.deportista', 'uses' => 'DeportistaController@index']);

Route::get('/listar_entrenadores', ['as' => 'listar.entrenador', 'uses' => 'EntrenadorController@index']);

Route::get('/test_resistencia',function ()
{
  return view('test_resistencia');
});

//**************************************************************
Route::get('/listar_test_fuerza/{id}', ['as' => 'listtestfuerza', 'uses' => 'TestController@listartestfuerza']);

Route::get('/test_fuerza/{id}', ['as' => 'testfuerza', 'uses' => 'TestController@index']);

Route::post('/guardar_fuerza/{id}', ['as' => 'guardarfuerza', 'uses' => 'TestController@guardarfuerza']);


Route::get('/editar_entrenador/{id}',['as'=>'editarentrenador', 'uses' => 'EntrenadorController@editarentrenador']);
Route::post('/edit_entrenador/{id}',['as'=>'edit.entrenador', 'uses' => 'EntrenadorController@update']);

Route::get('/editar_deportista/{id}', ['as' => 'editardeportista', 'uses' => 'DeportistaController@editardeportista']);
Route::post('/edit_deportista/{id}', ['as' => 'edit.deportista', 'uses' => 'DeportistaController@update']);
//****************************************************+

Route::get('/test_flexibilidad',function ()
{
  return view('test_flexibilidad');
});

Route::get('/test_corporal',function ()
{
  return view('test_corporal');
});
//**************************************
Route::get('eliminardeportista/{id}', ['as'=>'eliminar.deportista', 'uses'=>'DeportistaController@destroy']);

Route::get('eliminarentrenador/{id}', ['as'=>'eliminar.entrenador', 'uses'=>'EntrenadorController@destroy']);

Route::get('/deportista', ['as'=>'vista.deportista', 'uses'=>'DeportistaController@consultarentrenador']);

Route::post('guardardeportista',['as'=>'guardar.deportista', 'uses'=>'DeportistaController@store']);

Route::get('/entrenador',['as'=>'registar.entrenador', 'uses'=>'EntrenadorController@mostrarformulario']);

Route::post('guardarentrenador',['as'=>'guardar.entrenador', 'uses'=>'EntrenadorController@store']);
