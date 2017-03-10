<?php

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

Route::get('/', function() {
    return view('index');
});

// UserController
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register.show');
Route::post('/register', 'UserAuth\RegisterController@register')->name('register');