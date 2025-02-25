<?php

use Illuminate\Support\Facades\Route;
use Modules\Estados\Http\Controllers\EstadosController;

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

Route::group([
    'middleware' => ['auth', 'role:Admin|Super Admin'],
    'prefix' => 'status'], function () {
        Route::get('/', [EstadosController::class, 'index'])->name('estados');

    });

Route::group([
    'middleware' => 'auth',
    'prefix' => 'status'], function () {
        Route::get('/cambiarEstado/{id}', [EstadosController::class, 'cambiarEstado'])->name('cambiarEstado');

    });
