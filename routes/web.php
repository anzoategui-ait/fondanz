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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('bancos', App\Http\Controllers\BancoController::class)->middleware('auth');

Route::resource('cuentas', App\Http\Controllers\CuentaController::class)->middleware('auth');

Route::resource('ejercicios', App\Http\Controllers\EjercicioController::class)->middleware('auth');

Route::resource('proyectos', App\Http\Controllers\ProyectoController::class)->middleware('auth');

Route::resource('subproyectos', App\Http\Controllers\SubproyectoController::class)->middleware('auth');

Route::resource('sectores', App\Http\Controllers\SectoreController::class)->middleware('auth');

Route::resource('subsectores', App\Http\Controllers\SubsectoreController::class)->middleware('auth');

Route::resource('actividades', App\Http\Controllers\ActividadeController::class)->middleware('auth');

Route::resource('municipios', App\Http\Controllers\MunicipioController::class)->middleware('auth');

Route::resource('parroquias', App\Http\Controllers\ParroquiaController::class)->middleware('auth');

Route::resource('codigospostales', App\Http\Controllers\CodigospostaleController::class)->middleware('auth');

Route::resource('tipoempresas', App\Http\Controllers\TipoempresaController::class)->middleware('auth');
