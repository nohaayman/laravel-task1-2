<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ViewTestController;
use App\Http\Controllers\BladeTestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\httpController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//pass data
// Route::get('/{name}', function ($name) {
//     return view('welcome',['name'=>$name]);
// });
Route::get('/', function () {
    return view('welcome');
});


//Route::get(path,controller)

// Route::get(path,controller)
//use the controller
Route::get('/test',[UserController::class,'indix']);
//pass the data to the controller
Route::get('/test2/{id}',[TestController::class,'Test']);
// Route::get('/user/{name}', function ($name) {
//      return view('users',['users'=>$name]);
//     });

//pass data from controller to view
// Route::get('/user/{name}',[ViewTestController::class,'loadview']);
Route::get('/blade',[BladeTestController::class,'loadview']);
// Route::post('login',[FormController::class,'getdata']);
// Route::view('form',"login");
Route::get('/users',[UsersController::class,'index']);
Route::get('/usersmodel',[UsersController::class,'getdata']);
Route::get('/APIH',[httpController::class,'index']);
// Route::get('login',[FormController::class,'testreq']);
// Route::view('foorm',"login");
// Route::post('login2',[FormController::class,'testreq2']);
// Route::view('foorm2',"login");

Route::post('user',[FormController::class,'UserLogin']);
Route::view('form',"login");
Route::view('profile',"profile");
Route::get('/user', function () {

    if (session()->has('user')){
    
          redirect('profile');
    }
  
    return view('login');
    
    });
Route::get('/logout', function () {

if (session()->has('user')){

    session()->pull('user');
}
return  redirect('form');


});