<?php

use App\Http\Controllers\GetDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

Route::get('/get/repairs', [GetDataController::class, 'repairs'])->name('getPedidos');
Route::get('/get/items', [GetDataController::class, 'items'])->name('getitems');