<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
   
});

//LISTA TODOS LOS PAQUETES
Route::get('Paquetes','App\Http\Controllers\PaqueteController@index')->middleware('jwt.verify');
//CREA 1 PAQUETE CON SERVICIOS 
Route::post('Paquetes/Servicios','App\Http\Controllers\PaqueteController@getPaqueteServicios')->middleware('jwt.verify');
//CREA 1 PAQUETE
Route::post('Paquetes','App\Http\Controllers\PaqueteController@store')->middleware('jwt.verify');;
//ACTUALIZA 1 PAQUETE
Route::put('Paquetes/{id}','App\Http\Controllers\PaqueteController@update')->middleware('jwt.verify');

//LISTA TODOS LOS SERVICIOS
Route::get('Servicios','App\Http\Controllers\ServicioController@index')->middleware('jwt.verify');
//CREA UN NUEVO SERVICIO
Route::post('Servicios','App\Http\Controllers\ServicioController@store')->middleware('jwt.verify');
//ACTUALIZA UN SERVICIO
Route::put('Servicios/{id}','App\Http\Controllers\ServicioController@update')->middleware('jwt.verify');
//ELIMINA SERVICIO
Route::delete('Servicios/{id}','App\Http\Controllers\ServicioController@update')->middleware('jwt.verify');

//CREA UNA NUEVA POLIZA
Route::post('Polizas','App\Http\Controllers\PolizaController@store')->middleware('jwt.verify');

//MUESTRA POLIZAS DEL CLIENTE
Route::get('Polizas','App\Http\Controllers\PolizaController@MuestraPolizas')->middleware('jwt.verify');

//CREA 1 POLIZA CON SERVICIOS
Route::post('Polizas/Servicios','App\Http\Controllers\PolizaController@getPolizaServicios')->middleware('jwt.verify');


Route::post('Usuarios','App\Http\Controllers\UserController@store');
Route::get('Usuarios','App\Http\Controllers\UserController@index')->middleware('jwt.verify');
Route::get('Usuario','App\Http\Controllers\UserController@show')->middleware('jwt.verify');
Route::delete('Usuarios','App\Http\Controllers\UserController@destroy')->middleware('jwt.verify');
Route::post('Login','App\Http\Controllers\UserController@authenticate');
Route::put('Usuarios/{id}','App\Http\Controllers\UserController@update')->middleware('jwt.verify')->name('user.update');

