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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("socios",\App\Http\Controllers\SociosController::class);

Route::resource("registro_personas",\App\Http\Controllers\PersonasController::class);

Route::resource("registro_director",\App\Http\Controllers\DirectoresController::class);

Route::resource("registro_genero",\App\Http\Controllers\GenerosController::class);

Route::resource('cintas',\App\Http\Controllers\CintasController::class);

Route::resource('peliculas',\App\Http\Controllers\PeliculasController::class);

Route::resource("devoluciones",\App\Http\Controllers\DevolucionesController::class);

Route::resource('prestamos',\App\Http\Controllers\PrestamosController::class);

Route::resource("actores",\App\Http\Controllers\ActoresController::class);

Route::resource("generos",\App\Http\Controllers\GenerosController::class);

Route::resource("personas",\App\Http\Controllers\PersonasController::class);

Route::resource("esperas",\App\Http\Controllers\EsperasController::class);

Route::resource("directores",\App\Http\Controllers\DirectoresController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
