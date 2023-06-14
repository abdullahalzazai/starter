<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return 'hello admin';
});

// namespace

Route::namespace('App\Http\Controllers\Front')->group(function (){
    // all routes only access controller or methods in folder name Front
    Route::get('admin1','UserController@showAdminName');
});
