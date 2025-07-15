<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;

Route::get('/', function () {
    return view('welcome');
});

// header
Route::view('header','header');
Route::view('footer','footer');
// Route::view('main','MainFile');
Route::view('index','index');
Route::get('insert', function () {
    return view('insert'); 
});



// controllers
Route::post('addData',[student::class,'insertData']);
Route::get('insertData',[student::class,'FetchData']);