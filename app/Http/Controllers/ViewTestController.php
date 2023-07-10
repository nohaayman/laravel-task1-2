<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewTestController extends Controller
{
    public function loadview($name){
        return  view('users',['name'=>$name]);
    } 
}
