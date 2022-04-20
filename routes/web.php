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
    return view('main');
});

Route::get('/registration', function () {
    return view('pages/registration');
});

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'ShowLoginForm'])->name('login');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'ShowRegisterForm'])->name('register');
Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
