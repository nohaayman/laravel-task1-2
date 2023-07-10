<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTestController extends Controller
{


    public function loadview(){
        return  view('bladeTest',['names'=>['noha','salma','aesha','hamza','abdelarhman']]);
    } 
}
