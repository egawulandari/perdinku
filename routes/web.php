<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::prefix('auth')->group(function(){
    Route::get('/register', function() {
        return view('auth.register');
    })->name('register');
    Route::post('/register-post',[RegisterController::class,'register'])->name('register.post');

    Route::get('/login', function() {
        return view('auth.login');
    })->name('login');
    Route::post('/login-post',[LoginController::class,'login'])->name('login.post');

    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});

Route::get('/forget-password', function() {
    return view('auth.forget-password');
})->name('auth.forget-password');

Route::group(['middleware'=> ['admin']], function () {
    Route::get('/admin', function() {
        return view('app.admin.index');
    })->name('admin.dashboard');
});

Route::group(['middleware'=> ['pegawai']], function () {
    Route::get('/user', function() {
        return view('app.user.index');
    })->name('user.dashboard');
});

Route::prefix('sdm')->group(function(){
    Route::get('/', function() {
        return view('app.sdm.index');
    })->name('sdm.dashboard');

    Route::get('/master-kota', function() {
        return view('app.sdm.master-kota');
    })->name('sdm.master-kota');
});