<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test($id){
echo"hellllllllllllllllo     ";
            return ['name'=>$id,'age'=>5];     }
}
