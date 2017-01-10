<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// app_key:XEo9EUTXcac1HvHzjasgTecGP4QYOEjv

Route::get('/' , 'StaticPagesController@home')->name('home');
Route::get('/help' , 'StaticPagesController@help')->name('help');
Route::get('/about' , 'StaticPagesController@about')->name('about');
Route::get('signup' , 'UsersController@create')->name('signup');

resource('users' , 'UsersController');