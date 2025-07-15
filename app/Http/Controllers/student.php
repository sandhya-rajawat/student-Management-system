<?php

namespace App\Http\Controllers;
use App\Models\studentmst;

use Illuminate\Http\Request;

class student extends Controller
{
   function insertData(Request $rst){
   $data=new studentmst();
   $data->name=$rst->name;
   $data->email=$rst->email;
   $data->phone=$rst->phone;
   $data->city=$rst->city;
   if($data->save()){
 
    return redirect('insertData')->with("success",'Details added successfully!');
   }else{
    return  redirect('insert')->with("Error","Somthing Wrong");
   }
   }
//    dataShow
function FetchData(){
    $data=studentmst::all();
    return view('index',['DbData'=>$data]);

}
}
