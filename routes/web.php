<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index');
Route::resource('movies', 'MoviesController');


