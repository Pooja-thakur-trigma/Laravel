<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistereditController extends Controller {
     public function index(){
          $users = DB::select('select * from users');
          return view('register-edit',['users'=>$users]);
     }

     public function show($id) {
          $users = DB::select('select * from users where id = ?',[$id]);
          return view('register-edit',['users'=>$users]);
     }

     public function edit(Request $request,$id) {
          $name = $request->input('name');
          $email  = $request->input('email');
          $password = $request->input('password');

          $this->validate(request(), [
               'name' => 'required',
               'email' => 'required|email',
               'password' => 'required'
           ]);

          DB::update('update users set name = ?,email=?,password=? where id = ?',[$name,$email,$password,$id]);
          $users = DB::select('select * from users where id = ?',[$id]);
          return view('register-edit',['users'=>$users]);
     }
} 