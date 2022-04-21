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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\IndexController::class, 'aboutpage'])->name('about');
Route::get('/projects', [\App\Http\Controllers\IndexController::class, 'projectspage'])->name('projects');
Route::get('/service', [\App\Http\Controllers\IndexController::class, 'servivepage'])->name('service');

Route::middleware("auth")->group(function (){
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});
Route::middleware("guest")->group(function (){
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'ShowRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'ShowLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'ShowForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

Route::get('/contacts', [\App\Http\Controllers\IndexController::class, 'showContactForm'])->name('contacts');
Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class, 'contactForm'])->name('contact_form_process');
