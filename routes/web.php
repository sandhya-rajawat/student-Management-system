<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;

Route::get('/', function () {
    return view('welcome');
});

// header
Route::view('header','header');
Route::view('about','about');

Route::view('footer','footer');
// Route::view('main','MainFile');
Route::view('index','index');
Route::get('insert', function () {
    return view('insert'); 
});
Route::get('edit', function () {
    return view('update'); 
});





// controllers
Route::post('addData',[student::class,'insertData']);
Route::get('insertData',[student::class,'FetchData']);
Route::get('insert/{id}',[student::class,'DeleteData']);
Route::get('update/{id}',[student::class,'edit']);
Route::put('edit/{id}', [student::class, 'UpdateData']);
Route::get('search', [student::class, 'search']);