<?php

use Illuminate\Support\Facades\Route;

// Route::get('/home', 'HomeController@home') ->name('home');

// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');
