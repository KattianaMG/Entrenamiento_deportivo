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

Route::get('/listar_deportistas',function ()
{
  return view('listar_deportistas');
});

Route::get('/entrenador',['as'=>'registar.entrenador', 'uses'=>'EntrenadorController@mostrarformulario']);

Route::post('guardarentrenador',['as'=>'guardar.entrenador', 'uses'=>'EntrenadorController@store']);
