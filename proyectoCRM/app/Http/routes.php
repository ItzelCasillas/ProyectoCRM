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
    return view('home');
});

Route::post('/guardarCliente', 'crmController@guardar');
Route::get('/master', 'crmController@master');
Route::get('/registrarCliente', 'crmController@registrarC');
Route::post('/guardarCliente2', 'crmController@guardarC');
Route::get('/consultarClientes', 'crmController@consultarC');
Route::get('/eliminarCliente/{id}', 'crmController@eliminarC');
Route::get('/editarCliente/{id}', 'crmController@editarC');
Route::post('/actualizarCliente/{id}', 'crmController@ActualizarC');
Route::post('/filtrarOcupacion', 'crmController@filtrarOcupacion');
Route::get('/registrarPromo', 'crmController@registrarP');
Route::post('/guardarPromo', 'crmController@guardarP');
Route::get('/consultarPromociones', 'crmController@consultarP');
Route::get('/eliminarPromo/{id}', 'crmController@eliminarP');
Route::get('/editarPromo/{id}', 'crmController@editarP');
Route::post('/actualizarPromo/{id}', 'crmController@actualizarP');
Route::post('/enviarPromocion', 'crmController@enviarPromocion');



