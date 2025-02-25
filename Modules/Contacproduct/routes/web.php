<?php

use Illuminate\Support\Facades\Route;
use Modules\Contacproduct\Http\Controllers\ContacproductController;

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

Route::group(['middleware' => 'auth', 'prefix' => 'contactproduct'], function () {
    Route::get('/', [ContacproductController::class, 'index'])->name('contactproduct');
    Route::get('/create', [ContacproductController::class, 'create'])->name('contactproduct.create');
    // edit
    Route::get('/edit/{id}', [ContacproductController::class, 'edit'])->name('contactproduct.edit');

    Route::get('/notas/{id}', [ContacproductController::class, 'notas'])->name('contactproduct.notas');
    Route::get('/status/{id}', [ContacproductController::class, 'status'])->name('contactproduct.status');
});