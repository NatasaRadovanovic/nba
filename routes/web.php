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

Route::post('/teams/{id}/comments', 'CommentController@store')->name('comment');

Route::get('/teams/{id}/{user}', 'CommentController@show');



Route::get('/news', 'NewsController@index');

Route::get('/news/{id}', 'NewsController@show');

Route::get('/create', 'NewsController@create');

Route::get('/verification/{id}', 'RegisterController@verify');

Route::get('/news/team/{name}', 'NewsController@showNewsForTeam');

Route::post('/news', 'NewsController@store');










