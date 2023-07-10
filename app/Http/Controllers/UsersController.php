<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    function index(){


        return DB::select("SELECT * FROM users ");
    }


    function getdata(){
        return User::all();


    }
}
