<?php

use Illuminate\Support\Facades\Route;

// Route::get('/home', 'HomeController@home') ->name('home');

// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');

Route::get('api/postacards/list', 'ApiController@getPostcards') -> name('api.postcards.list');
