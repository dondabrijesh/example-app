<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    function index()
    {
        if(session()->has('username'))
        {
            return redirect('display');
        }else{
            return view('login');
        }

    }
    function userLogin(Request $request){
        $data= $request->input('username');
        $request->session()->put('username',$data);

        return redirect('display');
    }
    function logOut()
    {
        if(session()->has('username'))
        {
            session()->pull('username',null);
        }
        return redirect('login');
    }
    function upload(Request $request){
        return $request->file('file')->store('img');

    }
}
