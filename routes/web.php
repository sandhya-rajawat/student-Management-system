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
//home section

Route::get('homesection',function(){
 return view('home_section');
});

Route::get('home02_section',function(){
 return view('home02_section');
});
// home_message_view
Route::get('message',function(){
return view('home_message');
});
// about_scool_time
Route::get('schooltime',function(){
return view('about/school_time');
});
// about_scool_teacher
Route::get('teacher',function(){
return view('about/teacher');
});



// controllers_home
Route:: post('homesectionOne',[student_home::class,'DataInser']);
Route:: get('/',[student_home::class,'DataShow']);

// keyfeature_home
Route::post('home02_section',[student_home::class,'Datainsert']);
Route::get('/',[student_home::class,'DataFetch']);