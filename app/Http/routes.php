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

Route::get('/test_resistencia/{id}', ['as' => 'testresistencia', 'uses' => 'TestController@index2']);

Route::post('/guardar_resistencia/{id}', ['as' => 'guardarresistencia', 'uses' => 'TestController@guardarresistencia']);

Route::get('/eliminar_resistencia/{id}', ['as' => 'eliminarresistencia', 'uses' => 'TestController@eliminarresistencia']);
//**************************************************************
Route::get('/listar_test_fuerza/{id}', ['as' => 'listtestfuerza', 'uses' => 'TestController@listartestfuerza']);

Route::get('/test_fuerza/{id}', ['as' => 'testfuerza', 'uses' => 'TestController@index']);

Route::post('/guardar_fuerza/{id}', ['as' => 'guardarfuerza', 'uses' => 'TestController@guardarfuerza']);

Route::get('/eliminar_fuerza/{id}', ['as' => 'eliminarfuerza', 'uses' => 'TestController@eliminarfuerza']);


Route::get('/listar_test_flexibilidad/{id}', ['as' => 'listarflexibilidad', 'uses' => 'TestController@listarflexibilidad']);

Route::post('/guardar_flexibilidad/{id}', ['as' => 'guardarflexibilidad', 'uses' => 'TestController@guardarflexibilidad']);

Route::get('/eliminar_flexibilidad/{id}', ['as' => 'eliminarflexibilidad', 'uses' => 'TestController@eliminarflexibilidad']);

Route::get('/listar_test_corporal/{id}',['as' => 'listarcorporal', 'uses' => 'TestController@listarcorporal']);

Route::get('/listar_test_resistencia/{id}', ['as' => 'listarresistencia', 'uses' => 'TestController@listartestresistencia']);

Route::get('/editar_entrenador/{id}',['as'=>'editarentrenador', 'uses' => 'EntrenadorController@editarentrenador']);
Route::post('/edit_entrenador/{id}',['as'=>'edit.entrenador', 'uses' => 'EntrenadorController@update']);

Route::get('/editar_deportista/{id}', ['as' => 'editardeportista', 'uses' => 'DeportistaController@editardeportista']);
Route::post('/edit_deportista/{id}', ['as' => 'edit.deportista', 'uses' => 'DeportistaController@update']);
//****************************************************+

Route::get('/test_flexibilidad/{id}',['as' => 'testflexibilidad', 'uses' => 'TestController@index3']);

Route::get('/test_corporal/{id}', ['as' => 'testcorporal', 'uses' => 'TestController@index4']);

Route::post('/guardar_corporal/{id}', ['as' => 'guardarcorporal', 'uses' => 'TestController@guardarcorporal']);

Route::get('/eliminar_corporal/{id}', ['as' => 'eliminarcorporal', 'uses' => 'TestController@eliminarcorporal']);
//**************************************
Route::get('eliminardeportista/{id}', ['as'=>'eliminar.deportista', 'uses'=>'DeportistaController@destroy']);

Route::get('eliminarentrenador/{id}', ['as'=>'eliminar.entrenador', 'uses'=>'EntrenadorController@destroy']);

Route::get('/deportista', ['as'=>'vista.deportista', 'uses'=>'DeportistaController@consultarentrenador']);

Route::post('guardardeportista',['as'=>'guardar.deportista', 'uses'=>'DeportistaController@store']);

Route::get('/entrenador',['as'=>'registar.entrenador', 'uses'=>'EntrenadorController@mostrarformulario']);

Route::post('guardarentrenador',['as'=>'guardar.entrenador', 'uses'=>'EntrenadorController@store']);
