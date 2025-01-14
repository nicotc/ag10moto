<?php

use Illuminate\Support\Facades\Route;
use Modules\Acl\Http\Controllers\AclController;

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

// Route::group([], function () {
//     Route::resource('acl', AclController::class)->names('acl');
// });

//
// mideleware('auth') prefix acl

Route::group(['middleware' => 'auth', 'prefix' => 'acl'], function () {
    Route::view('user-list', 'acl::Users.list')->name('user-list');
    Route::view('roles-list', 'acl::Roles.list')->name('roles-list');
    Route::view('permission-list', 'acl::Permission.list')->name('permission-list');
    
});
