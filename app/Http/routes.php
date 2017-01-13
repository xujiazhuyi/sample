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

// app_key:NCaCpGKxpJ88JW8ZLdgYs5PhyXS2FUt7
// https://guarded-sea-66421.herokuapp.com/
// guarded-sea-66421
// postgresql-contoured-30590

Route::get('/' , 'StaticPagesController@home')->name('home');
Route::get('/help' , 'StaticPagesController@help')->name('help');
Route::get('/about' , 'StaticPagesController@about')->name('about');
Route::get('signup' , 'UsersController@create')->name('signup');

resource('users' , 'UsersController');
Route::get('users/{id}/edit' , 'UsersController@edit')->name('users.edit');

Route::get('login' , 'SessionsController@create')->name('login');
Route::post('login' , 'SessionsController@store')->name('login');
Route::delete('logout' , 'SessionsController@destory')->name('logout');
