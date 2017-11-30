<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['jwt.auth']], function () {
});

Route::post('/login', 'AuthController@authenticate');

Route::apiResource('Administrador', 'AdministradorController');
Route::apiResource('Condicion','CondicionController');
Route::apiResource('Departamento','DepartamentoController');
Route::apiResource('Documento','DocumentoController');
Route::apiResource('Encargado','EncargadoController');
Route::apiResource('Tramite','TramiteController');

