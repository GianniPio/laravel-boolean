<?php

use Illuminate\Support\Facades\Route;

// Route::get('/home', 'HomeController@home') ->name('home');

// Auth::routes();

Route::get('/home', 'GuestController@home')->name('home');
