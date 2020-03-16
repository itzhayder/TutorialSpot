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

Route::get('/playback', function () {
    return view('playback');
});


<<<<<<< HEAD

=======
>>>>>>> 156d1163d324d9896ebce06bfb53f452fe7e9ee1
Route::get('/list', function () {
    return view('list');
});

Route::get('/videoList', function () {
    return view('videoList');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
