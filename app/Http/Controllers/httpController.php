<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;

class httpController extends Controller
{
    function index(){
        $collection= HTTP::get("https://reqres.in/api/users?page=1 ");
        return view('User',['collection'=>$collection['data']]);
    }
}
