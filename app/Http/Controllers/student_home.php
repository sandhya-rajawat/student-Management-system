<?php

namespace App\Http\Controllers;

use App\Models\home_section;
use App\Models\home02_section;
use App\Models\home_message;
use App\Models\home_teacher;
use App\Models\school_time;


use Illuminate\Http\Request;

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
            return  redirect('/')->with("Error", "Somthing Wrong");
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
            return  redirect('/')->with("Error", "Somthing Wrong");
        }
    }

    // dataShow

    public function DataFetch()
    {
        $data = home_section::latest()->first();
        $features = home02_section::all();

        return view('home', [
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
            return  redirect('/')->with("Error", "Somthing Wrong");
        }
   }
   function GetMessage(){
    $messageGet=home_message::all();
    return view('home_message',['message'=>$messageGet]);

   }
//    about page...........
// insert
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
            return  redirect('/')->with("Error", "Somthing Wrong");
        }
}
// GetTeachers Details

function GetTeacherDetail(){
    $GetDataDetail=home_teacher::all();
    return view('about.teacher',['teacherInfo'=>$GetDataDetail]);
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
            return  redirect('/')->with("Error", "Somthing Wrong");
        }
}

// Fetch data
function FetchSchoolTime(){
    $GetTime=school_time::all();
    return view('about/schoolTime',['GetTimeInfo'=> $GetTime]);
}







}
