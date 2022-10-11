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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('bancos', App\Http\Controllers\BancoController::class);

Route::resource('cuentas', App\Http\Controllers\CuentaController::class);

Route::resource('ejercicios', App\Http\Controllers\EjercicioController::class);

Route::resource('proyectos', App\Http\Controllers\ProyectoController::class);

Route::resource('subproyectos', App\Http\Controllers\SubproyectoController::class);
