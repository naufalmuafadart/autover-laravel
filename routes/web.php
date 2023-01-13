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
    return view('./page/no_login/home');
});

Route::get('/signup', function () {
    return view('./page/no_login/signup');
});

Route::get('/login', function () {
    return view('./page/no_login/login');
});

Route::get('/begin_reset_password', function () {
    return view('./page/no_login/begin_reset_password');
});

Route::get('/reset_password', function () {
    return view('./page/no_login/reset_password');
});
