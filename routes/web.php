<?php

 Route::get('/', function () {
    return view('welcome');
 });

Route::get('/', 'TeamController@index');

Route::get('/teams/{id}', 'TeamController@show');

Route::get('/players/{id}', 'PlayerController@show');

Route::post('/register', 'RegisterController@store');

Route::get('/register', 'RegisterController@create');

Route::post('/login', 'LoginController@store');

Route::get('/login', 'LoginController@create');

Route::get('/logout', 'LoginController@destroy');



