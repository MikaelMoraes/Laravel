<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloWorld = 'hello World';
    return view('welcome', compact('helloWorld'));
}); 
Route::get('/model', function () {
   // $products = \App\Product::all(); //select * fromm products
   $user = new \App\User();
   $user-> name ='usuario';
   $user -> email =  'email@teste.com';
   $user -> password = bcrypt('12345678');
  // return $user->save();
    return \App\User::all();
    //return $products; 
}); 

