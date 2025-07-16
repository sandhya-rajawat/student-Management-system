<?php

namespace App\Http\Controllers;
use App\Models\home_section;
use App\Models\home02_section;

use Illuminate\Http\Request;

class student_home extends Controller
{
    // datainsert
    function DataInser(Request $rst){
        $data= new home_section;
        $data->title=$rst->title;
        $data->description=$rst->description;
      if ($data->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  redirect('/')->with("Error", "Somthing Wrong");
        }
        
    }

    // dataShow....................................
    function DataShow(){
        $data=home_section::latest()->first();
        return view('home',['data'=>$data]);
    }

    // data_insert_key_features..............
    function Datainsert(Request $rst){
        $data= new home02_section;
        $data->title=$rst->title;
        $data->description=$rst->description;
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
  
 public function DataFetch() {
    $data = home_section::latest()->first();       
    $features = home02_section::all();            

    return view('home', [
        'data' => $data,
        'features' => $features
    ]);
}

    
}
