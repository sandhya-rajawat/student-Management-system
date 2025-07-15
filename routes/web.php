<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// header
Route::view('header','header');
Route::view('footer','footer');
Route::view('main','MainFile');