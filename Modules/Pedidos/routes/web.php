<?php

use Illuminate\Support\Facades\Route;
use Modules\Pedidos\Http\Controllers\PedidosController;

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

Route::group(['middleware' => 'auth', 'prefix' => 'pedidos'], function () {
    Route::view('pedidos', 'pedidos::index')->name('pedidos-list');
    // Route::view('crear-pedidos', 'pedidos::crear-pedidos')->name('crear-pedidos');
    Route::get('edit/{id}', [PedidosController::class, 'edit'] )->name('pedidos.edit');
});
