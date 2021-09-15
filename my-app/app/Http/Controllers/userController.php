<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class userController extends Controller
{
    function index(){
        return view('users');
    }
    function saveData(Request $req){

        $user = new User();
        $user->name = $req['username'];
        $user->email = $req['email'];
        $user->password = $req['password'];
        $user->save();
        return redirect('users');
    }
    function show()
    {
        $data =user::paginate(5);//model nu name lakhvanu ane model nu name ane table nu name same ave just there is camel case diffrence
        //baki model nu name user thi j daatabase ma kam krvanu
        return view('list')->with('data',$data);//key and data
    }
    function destroy($id){
        $data=user::find($id);
        $data->delete();
        return redirect('list');
    }
    function edit($id)
    {
        $data= user::find($id);
        return view('edit')->with('data',$data);
    }
    function update(Request $req){
       $data=user::find($req->id);
       $data->name=$req->name;
       $data->email=$req->email;
       $data->password=$req->password;
       $data->save();
       return redirect('list');

    }

}
