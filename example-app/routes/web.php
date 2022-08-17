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
    $user = \App\Models\User::create([

        'name'=>'mikael vitor',
        'email'=> 'miakel.vitor@gmail.com',
        'password'=> bcrypt('123456')
    ]);
    dd($user);
    
    return \App\Models\User::all();
  
}); 


Route::get('/admin/stores', 'Admin\\StoreController@index');