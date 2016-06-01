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
Route::group(['middleware' => 'android'], function () {
    Route::post('/api/v1/reclamo', 'ReclamoController@store');
    Route::get('/api/v1/descargar/gastos_medicos', 'DescargaController@gastos_medicos');
    Route::get('/api/v1/descargar/denuncia_siniestro', 'DescargaController@denuncia_siniestro');
    Route::get('/api/v1/descargar/seguro_arrendamiento', 'DescargaController@seguro_arrendamiento');
    Route::get('/api/v1/descargar/seguro_vida', 'DescargaController@seguro_vida');
});

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/reclamo', 'ReclamoController@index');
    Route::get('/reclamo/atendidos', 'ReclamoController@atendidos');
    Route::post('/reclamo/atender', 'ReclamoController@atender');
    Route::get('/reclamo/anulados', 'ReclamoController@anulados');
    Route::post('/reclamo/anular', 'ReclamoController@anular');
    Route::get('/reportes', 'ReporteController@index');
    Route::post('/reportes/crear', 'ReporteController@crear');

});



