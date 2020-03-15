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
    return view('homepage');
});

Route::get('/admin', function () {
    return view('auth.login');
});

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
});
=======
>>>>>>> f3bb4084eaa224bba16efc2fa8bccf343dbfff04

Route::get('/list', function () {
    return view('list');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
