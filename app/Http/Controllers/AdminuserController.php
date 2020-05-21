<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminuserController extends Controller {
     public function index(){
     $register_users = DB::select('select * from registers');
     return view('admin-users',['register_users'=>$register_users]);
   }
}
  
