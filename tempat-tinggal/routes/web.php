<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;

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

Route::get('/dashboard', function () {
    return view('layouts.headline');
});

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/signin', [loginController::class, 'ShowLoginForm']);

Route::get('/signup', [registrationController::class, 'ShowRegistrationForm']);
Route::post('/registUser', [registrationController::class, 'registrationUser']);

Route::get('/forgot-pass', function () {
    return view('layouts.auth.forgot-pass');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
