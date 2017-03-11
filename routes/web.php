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

Route::group(['prefix' => '/'], function() {
    Route::get('/', 'UserAuth\HomeController@index')->name('home'); 
    Route::post('/', 'UserAuth\LoginController@login');
});

Route::group(['prefix' => '/login'], function() {
    Route::get('/', 'UserAuth\LoginController@index')->name('login.show');
    Route::post('/', 'UserAuth\LoginController@login')->name('login');
});

// UserController
//Auth::routes();

Route::group(['prefix' => '/register'], function() {
    // displays the registration form on /register
    Route::get('/', 'UserAuth\RegisterController@showRegistrationForm')->name('register.show');
    // sends post request to /register
    Route::post('/', 'UserAuth\RegisterController@register')->name('register');
});
