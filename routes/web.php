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

Route::get('/', 'UserAuth\HomeController@index')->name('home');

// UserController
//Auth::routes();

Route::group(['prefix' => '/register'], function() {
    // displays the registration form on /register
    Route::get('/', 'UserAuth\RegisterController@showRegistrationForm')->name('register.show');
    // sends post request to /register
    Route::post('/', 'UserAuth\RegisterController@register')->name('register');
});