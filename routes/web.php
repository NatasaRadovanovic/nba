<?php

 Route::get('/', function () {
    return view('welcome');
 });

Route::get('/', 'TeamController@index');

Route::get('/teams/{id}', 'TeamController@show');

Route::get('/players/{id}', 'PlayerController@show');

Route::post('/register', 'RegisterController@store');

Route::get('/register', 'RegisterController@create')->name('register');

Route::post('/login', 'LoginController@store');

Route::get('/login', 'LoginController@create')->name('login');

Route::get('/logout', 'LoginController@destroy');



