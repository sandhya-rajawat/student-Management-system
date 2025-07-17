<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;
use App\Http\Controllers\student_home;

Route::get('/', function () {
    return view('welcome');
});

// header
Route::view('header', 'header');
Route::view('footer', 'footer');
Route::view('/', 'home');
//home section

Route::get('homesection', function () {
    return view('home_section');
});

Route::get('home02_section', function () {
    return view('home02_section');
});
// home_message_view
Route::get('message', function () {
    return view('home_message');
});
// home_message_form
Route::get('head_message', function () {
    return view('message');
});
// about_scool_time
Route::get('schooltime', function () {
    return view('about/school_time');
});
// about_scool_teacher
Route::get('teacher', function () {
    return view('about/teacher');
});
Route::get('teacher_form', function () {
    return view('about/teacher_form');
});



// controllers_home
Route::post('homesectionOne', [student_home::class, 'DataInser']);
Route::get('/', [student_home::class, 'DataShow']);

// keyfeature_home
Route::post('home02_section', [student_home::class, 'Datainsert']);
Route::get('/', [student_home::class, 'DataFetch']);

// message insertMessage
Route::post('insertMessage', [student_home::class, 'insertMessage']);
Route::get('Head_Department_message', [student_home::class, 'GetMessage']);

// about_teacher 
Route::post('insertTeacherDetail', [student_home::class, 'insertTeacherDetail']);
Route::get('teachers_team', [student_home::class, 'GetTeacherDetail']);
