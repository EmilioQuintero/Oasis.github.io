<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('home');});

Route::get('/CrearPoliza', function () { return view('CrearPoliza');})->middleware('auth')->name('CrearPoliza') ;
Route::get('/PerfilUsuario', function () { return view('PerfilUsuario');})->middleware('auth')->name('PerfilUsuario') ;
Route::get('/EditarUsuario', function () { return view('EditarUsuario');})->middleware('auth')->name('EditarUsuario') ;
Route::get('/CrearPaquete', function () { return view('CrearPaquete');})->middleware('auth')->name('CrearPaquete') ;
Route::get('/ConsultarPaquetes', function () { return view('ConsultarPaquetes');})->middleware('auth')->name('ConsultarPaquetes') ;
Route::get('/ConsultarClientes', function () { return view('ConsultarClientes');})->middleware('auth')->name('ConsultarClientes') ;
Route::get('/RegistrarCliente', function () { return view('RegistrarCliente');})->middleware('auth')->name('RegistrarCliente') ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
