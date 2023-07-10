<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{   //return the login name and password data
    public function getdata(Request $req){
    $req->validate([

        'uname'=>"required"
    ]);
        return  $req->input();
    }


//if i use get meyhode
    public function testreq(Request $req ){

        return "hellow from login controller";
    }
    //post method
    public function testreq2(Request $req ){

        return $req->input();
    }
    

    public function UserLogin(Request $req){

        $data = $req->input();
        if (isset($data['user'])) {
            $req->session()->put('user', $data['user']);
            echo session("user");
        } else {
            // handle the case when the 'user' key does not exist
        }
        return redirect('profile');
    }
}
