<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;
use App\Http\Controllers\student_home;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

// header
Route::view('header', 'header');
Route::view('footer', 'footer');
Route::view('/', 'home-blog');
//home section
Route::get('tour-content-form', function () {
    return view('tour-content-form');
});

Route::get('teacher-hod', function () {
    return view('teacher-hod');
});

Route::get('home-blog-form', function () {
    return view('home-blog-form');
});

// Head
// Route::get('message', function () {
//     return view('teacher-hod');
// });
// home_head
Route::get('teacher-hod-form', function () {
    return view('teacher-hod-form');
});
// about_scool_time
Route::get('schooltime', function () {
    return view('school-time');
});
// about_scool_teacher
Route::get('teacher', function () {
    return view('teacher-community');
});
Route::get('teacher_form', function () {
    return view('teacher-community-form');
});

// schoolTIme_Form
Route::get('schooltime_form', function () {
    return view('school-time-form');
});

// Events
Route::get('event', function () {
    return view('school-events');
});

// Events form
Route::get('event_form', function () {
    return view('school-events-form');
});


// login and logout

// signup
Route::get('signup', function () {
    return view('signup');
});

// signin
Route::get('signin', function () {
    return view('signin');
});

// blog_details........

Route::get('blog-details', function () {
    return view('blog-details');
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


// schooltime 
Route::post('insertSchoolTime', [student_home::class, 'insertSchoolTime']);
Route::Get('school_time', [student_home::class, 'FetchSchoolTime']);


// school_evets  fetchSchoolEvents
Route::post('insertSchoolEvents', [student_home::class, 'insertSchoolEvents']);
Route::get('school_event', [student_home::class, 'fetchSchoolEvents']);



// login page..............
// signup...................page 
Route::post('signup', [student_home::class,'createUser']);
Route::post('signin', [student_home::class,'userLogin']);

Route::get('/signout', function () {
    Session::forget('profile');
    return redirect('/signin')->with('success', 'Logged out successfully!');
});


Route::get('blog-detils', [student_home::class,'GetBlogDetails']);