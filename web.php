<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\MarkController;



/*Route::get('/get', [MarkController::class, 'calcu']);

Route::post('/calculation',[MarkController::class, 'index']); */

/*

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function() {
    return "hello world";
});
Route::get('/customer/{name?}', function($name="LPU") {
    return "hello world, ".$name;
});
Route::get('/customer1/{name?}', function($name=null) {
    return "hello world, ".$name;
});
Route::get('/ramanareddy/{name?}/{id?}', function ($n='Litesh',$id=1) {
    return 'Welcome '.$n." ".$id;
    });
Route::get('/customer2/{name?}/{age?}', function ($n='Litesh',$age=16) {
    return 'My name is '.$n." and My age is".$age;
    });
Route::get('/customer3/{name}/{age}', function ($n,$age) {
    return 'My name is '.$n." and My age is".$age;
    })->where('name', '[ a-zA-Z]+')->where('age', '[0-9]+');
Route::get('/customer4/{name}/{age}', function ($n,$age) {
    return 'My name is '.$n." and My age is".$age;
    })->where(['name'=>'[ a-zA-Z]+','age'=>'[0-9]+']);*/

Route::get('/upload',[UploadController::class,'uploadForm']);

Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.uploadfile');


/*Route::get('/submit', [MarksController::class, 'getMarks']);


//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('welcome');
});




Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});



Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
}); */


