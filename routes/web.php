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

Route::get('/admin',function (){
   return view('admin-index');
});

Route::get('admin-users','AdminuserController@index'); 
Route::get('/', 'RegisterController@create');
Route::post('/', 'RegisterController@store');

Route::get('register-listing','RegisterlistingController@index'); 
Route::get('register-edit/user-{register_id}','RegistereditController@show');
Route::post('register-edit/user-{register_id}','RegistereditController@edit'); 
Route::get('delete-records','RegisterdeleteController@index');
Route::get('register-listing/user-{register_id}','RegisterdeleteController@destroy'); 
Route::get('admin-users/user-{register_id}','RegisterdeleteController@destroy'); 

//Route::get('/', 'LoginController@create');
//Route::post('/', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');