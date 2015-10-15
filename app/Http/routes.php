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

Route::get('/', function () {
    return view('welcome');
	Route::resource('usuario','UsuarioController');

});
*/
Route::get('/','UsuarioController@index');
Route::get('usuario/index','UsuarioController@index');
Route::resource('usuario','UsuarioController');
Route::resource('departamento','ControllerDepartamento');
