<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PageController@home')->middleware('auth')->name('home');
Route::get('/home', 'App\Http\Controllers\PageController@home')->middleware('auth');

Route::get('/login', 'App\Http\Controllers\PageController@login')->name('login-form');
Route::get('/register', 'App\Http\Controllers\PageController@register')->name('register-form');

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::post('/register', 'App\Http\Controllers\UserController@register')->name('register');
