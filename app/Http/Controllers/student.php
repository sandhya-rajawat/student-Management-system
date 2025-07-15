<?php

namespace App\Http\Controllers;

use App\Models\studentmst;

use Illuminate\Http\Request;

class student extends Controller
{
    // DataInsert...............................................
    function insertData(Request $rst)
    {
        $data = new studentmst();
        $data->name = $rst->name;
        $data->email = $rst->email;
        $data->phone = $rst->phone;
        $data->city = $rst->city;
        if ($data->save()) {

            return redirect('insertData')->with("success", 'Details added successfully!');
        } else {
            return  redirect('insert')->with("Error", "Somthing Wrong");
        }
    }
    //dataShow...................................................
    function FetchData()
    {
        // $data = studentmst::all();
        $data=studentmst::paginate(10);
        return view('index', ['DbData' => $data]);
    }
    // delete data..............................................
    public function DeleteData($id)
    {
        $deleted = studentmst::destroy($id);
        if ($deleted) {
            return redirect('insertData')->with('success', "Student ID $id deleted.");
        } else {
            return redirect('insertData')->with('error', "Something went wrong.");
        }
    }
    // update data
    function edit($id)
    {
        $data = studentmst::find($id);
        return view('edit',['UpdateData'=>$data]);
    }
    function UpdateData(Request $rst,$id){
        $data=studentmst::find($id);
        $data->name = $rst->name;
        $data->email = $rst->email;
        $data->phone = $rst->phone;
        $data->city = $rst->city;
        if($data->save()){
            return redirect('insertData')->with('success', "Student update deleted.");
        }else{
             return redirect('insertData')->with('error', "Something went wrong.");
        }
    }
}
