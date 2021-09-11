<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    function getData(Request $req){
        return $req->input();
    }
}
