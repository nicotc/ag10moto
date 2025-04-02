<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetDataController;
use App\Http\Controllers\DashboardConroller;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardConroller::class, 'index' ])->name('dashboard');

});

Route::get('/get/repairs', [GetDataController::class, 'repairs'])->name('getPedidos');
Route::get('/get/items', [GetDataController::class, 'items'])->name('getitems');
Route::get('/sendmail', [GetDataController::class, 'sendmail'])->name('sendmail');