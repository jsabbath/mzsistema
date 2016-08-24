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
Route::group(['prefix' =>'administrador', 'middleware' => 'auth'], function(){
	Route::resource('facturas','facturasController');
	
	Route::group(['middleware' => 'admin'], function(){
	Route::resource('departamentos','departamentosController');
	Route::resource('users','usersController');
	Route::resource('clientes','clientesController');
	Route::resource('casos','casosController');
	
#Rutas creadas para eliminar
	Route::get('departamentos/{id}/destroy', [
		'uses' => 'departamentosController@destroy',
		'as'   => 'administrador.departamentos.destroy'
	]);
	Route::get('users/{id}/destroy', [
		'uses' => 'usersController@destroy',
		'as'   => 'administrador.users.destroy'
	]);
	Route::get('clientes/{id}/destroy', [
		'uses' => 'clientesController@destroy',
		'as'   => 'administrador.clientes.destroy'
	]);
	Route::get('casos/{id}/destroy', [
		'uses' => 'casosController@destroy',
		'as'   => 'administrador.casos.destroy'
	]);
});});
#Ruta del autentificador
	Route::resource('log', 'logController');
	Route::get('logout', 'logController@logout');