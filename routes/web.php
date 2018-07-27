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

Route::post('/teams/{id}/comments', 'CommentController@store');

Route::get('/teams/{id}/{user}', 'CommentController@show');

Route::get('/news', 'NewController@create');

Route::get('/news', 'NewController@index');

Route::get('/news/{id}', 'NewController@show');

Route::get('/verification/{id}', 'RegisterController@verify');





