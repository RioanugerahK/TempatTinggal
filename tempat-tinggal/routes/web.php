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
    return view('layouts.headline');
});

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/masuk', function () {
    return view('layouts.auth.login');
});
Route::get('/forgot-pass', function () {
    return view('layouts.auth.forgot-pass');
});
Route::get('/registration', function () {
    return view('layouts.auth.registration');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
