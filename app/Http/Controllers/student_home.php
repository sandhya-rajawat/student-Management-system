<?php

namespace App\Http\Controllers;

use App\Models\home_section;
use App\Models\home02_section;
use App\Models\home_message;
use App\Models\home_teacher;
use App\Models\school_time;
use App\Models\school_event;
use App\Models\signup;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class student_home extends Controller
{
    // datainsert
    function DataInser(Request $rst)
    {
        $data = new home_section;
        $data->title = $rst->title;
        $data->description = $rst->description;
        if ($data->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return back()->with("Error", "Somthing Wrong");
        }
    }

    // dataShow....................................
    function DataShow()
    {
        $data = home_section::latest()->first();
        return view('home', ['data' => $data]);
    }

    // data_insert_key_features..............
    function Datainsert(Request $rst)
    {
        $data = new home02_section;
        $data->title = $rst->title;
        $data->description = $rst->description;
        if ($rst->hasFile('image')) {
            $file = $rst->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);  // Upload to /public/uploads/
            $data->image = $filename;  // Store filename in DB
        }
        if ($data->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
    }

    // dataShow

    public function DataFetch()
    {
        $data = home_section::latest()->first();
        $features = home02_section::all();

        return view('home-blog', [
            'data' => $data,
            'features' => $features
        ]);
    }

    // Used for the anothe page of home

    function insertMessage(Request $request){
        $messageData=new home_message();
        $messageData->title=$request->title;
        $messageData->name=$request->name;
        $messageData->description=$request->description;
       if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);  // Upload to /public/uploads/
            $messageData->image = $filename;  // Store filename in DB
        }
        if ($messageData->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
   }
   function GetMessage(){
    $messageGet=home_message::all();
    return view('teacher-hod',['message'=>$messageGet]);
// .....................................................................................................
   }
//    about page...........
// insert Teachers
function insertTeacherDetail(Request $request){
   $DataDetail=new home_teacher();
   $DataDetail->name=$request->name;
   $DataDetail->possition=$request->possition;
   $DataDetail->Eduction=$request->edution;
if($request->hasfile('image')){
    $file=$request->file('image');
    $filename=time(). '.'.$file->getClientOriginalExtension();
    $file->move(public_path('uploads'),$filename);
    $DataDetail->image=$filename;
}   if ($DataDetail->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
}
// GetTeachers Details

function GetTeacherDetail(){
    $GetDataDetail=home_teacher::all();
    return view('teacher-community',['teacherInfo'=>$GetDataDetail]);
}


// schoolTime....
// insert
function insertSchoolTime(Request $request){
   $DataSclTime= new school_time();
   $DataSclTime->title=$request->title;
   $DataSclTime->day=$request->day;
  if ($DataSclTime->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
}

// Fetch data
function FetchSchoolTime(){
    $GetTime=school_time::all();
    return view('school-time',['GetTimeInfo'=> $GetTime]);
}

// School_Evets............
// insert

function insertSchoolEvents(Request $request){
$DataSchoolEvents=new school_event();
$DataSchoolEvents->name=$request->name;
$DataSchoolEvents->title=$request->title;
if($request->hasFile('image')){
    $file=$request->file('image');
    $filename=time().".".$file->getClientOriginalExtension();
    $file->move(public_path('uploads'),$filename);
    $DataSchoolEvents->image=$filename;
     if ($DataSchoolEvents->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return back()->with("Error", "Somthing Wrong");
        }
}
}
// fetch data
function fetchSchoolEvents(){
    $getSchoolEvents=school_event::all();
    return view('school-events',["getinfo"=>$getSchoolEvents]);
}

// login-page..
// signup............
function createUser(Request $request){
$UserData= new signup;
$UserData->name=$request->name;
$UserData->email=$request->email;
$UserData->phone=$request->phone;
$UserData->password = Hash::make($request->password);
$UserData->gender=$request->gender;
if($UserData->save()){
     return redirect('/')->with("success", 'Details added successfully!');
        } else {
            back()->with("Error", 'Faile mission!!');
}
}
// signin......................
function userLogin(Request $request){

    $GetUserData=signup::where('email',$request->email)->first();
    if($GetUserData && Hash::check($request->password,$GetUserData->password)){
        Session::put('profile',$GetUserData);
          return redirect('/')->with('success', 'Logged in successfully!');
    } else {
        return back()->with('error', 'Invalid Email or Password');
    }
    }
}







