<?php

namespace App\Http\Controllers;
use App\Models\home_section;

use Illuminate\Http\Request;

class student_home extends Controller
{
    // datainsert
    function DataGet(Request $rst){
        $data= new home_section;
        $data->title=$rst->title;
        $data->description=$rst->description;
      if ($data->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  redirect('/')->with("Error", "Somthing Wrong");
        }
        
    }

    // dataShow
    
}
