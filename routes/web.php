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
    return view('welcome');
});

Route::get('/login', function() {
    return view('Auth/Login');
});

// register

Route::get('/register 1', function() {
    return view('Auth/Register/Register_1');
});

Route::get('/register 2', function() {
    return view('Auth/Register/Register_2');
});

Route::get('/register 3', function() {
    return view('Auth/Register/Register_3');
});

Route::get('/confirmEmail', function() {
    return view('Auth/Register/Register_confirm_email');
});

Route::get('/confirmEmailsuccess', function() {
    return view('Auth/Register/Register_confirm_email_success');
});

Route::get('/uploadpicture', function() {
    return view('Auth/Register/uploadpicture');
});

Route::get('/registersucess', function() {
    return view('Auth/Register/Register_sucess');
});
