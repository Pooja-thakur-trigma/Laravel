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
    return view('welcome');
});

Route::get('/admin',function (){
   return view('admin-index');
});

 Route::get('admin-users','AdminuserController@index'); 
 Route::get('/register', 'RegisterController@create');
 Route::post('register', 'RegisterController@store');

 Route::get('register-listing','RegisterlistingController@index'); 