<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function() {
    return view('auth.login');
});

Route::get('/admin', function() {
    return view('app.admin.index');
})->name('admin.dashboard');

Route::get('/user', function() {
    return view('app.user.index');
})->name('user.dashboard');