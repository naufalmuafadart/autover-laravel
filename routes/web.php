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

Route::get('/', 'View\NoLogin\HomeController@index');

Route::get('/signup', 'View\NoLogin\LoginSignUpController@signup');

Route::get('/login', 'View\NoLogin\LoginSignUpController@login');

Route::get('/begin_reset_password', 'View\NoLogin\ResetPassword@beginResetPassword');

Route::get('/reset_password', 'View\NoLogin\ResetPassword@resetPassword');
