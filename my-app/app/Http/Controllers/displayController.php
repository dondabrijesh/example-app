<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Support\Facades\Http; this method is for api call
class displayController extends Controller
{
    function show(){
        $data=user::all();
        return view('display')->with('data',$data);
    }
    function destroy($id){
        $data=user::find($id);
        $data->delete();
        return redirect('display');
    }
    function index(Request $req){
        $data=user::find($req->id);
        if($data!=NULL)
        {
            return view('insert')->with('data',$data);
        }
        else{
            return view('insert');
        }
    }
    function saveData(Request $req)
    {   $name = $req->file('imgUpload')->getClientOriginalName();

         $req->file('imgUpload')->move(public_path('images'),$name);
        $data=user::find($req->id);
        if($data!=NULL)
        {
            $data=user::find($req->id);
            $data->name=$req->name;
            $data->email=$req->email;
            $data->password=$req->password;
            $data->gender=$req->gender;
            $data->status=$req->status;
            $data->category=implode(",",$req->category);
            $data->file=$name ;
            $data->save();
            return redirect('display');

        }
        else{


            $data=new user();
            $data->name=$req->name;
            $data->email=$req->email;
            $data->password=$req->password;
            $data->gender=$req->gender;
            $data->status=$req->status;
            $data->category=implode(",",$req->category);
            $data->image_path=$name;
            $data->save();
            return redirect('display');
        }
    }
}
