<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;
use App\Http\Controllers\student_home;

Route::get('/', function () {
    return view('welcome');
});

// header
Route::view('header','header');
Route::view('footer','footer');
Route::view('/','home');






// controllers
// Route::post('addData',[student::class,'insertData']);
// Route::get('insertData',[student::class,'FetchData']);
// Route::get('insert/{id}',[student::class,'DeleteData']);
// Route::get('update/{id}',[student::class,'edit']);
// Route::put('edit/{id}', [student::class, 'UpdateData']);
// Route::get('search', [student::class, 'search']);



//home section

Route::get('homesection',function(){
 return view('home_section');
});


// controllers
Route:: post('homesectionOne',[student_home::class,'DataGet']);
Route:: get('/',[student_home::class,'DataShow']);