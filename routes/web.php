<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'App\Http\Controllers\LucasController@about');
Route::get('/services', 'App\Http\Controllers\LucasController@services');
