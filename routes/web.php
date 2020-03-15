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

Route::get('/dashboard', function () {
    return view('dashboard');
});
<<<<<<< HEAD
=======

Route::get('/playback', function () {
    return view('playback');
});


=======
>>>>>>> 2605375ca3e4c20f8c5eba9bcdb55448cdf29336
>>>>>>> fe47d9aae22e38fc99bc0a530270bdd0126d3612

Route::get('/list', function () {
    return view('list');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
