<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterlistingController extends Controller {
     public function index(){
     $register_users = DB::select('select * from registers');
     return view('register-listing',['register_users'=>$register_users]);
   }
}

