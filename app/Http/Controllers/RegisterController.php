<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class RegisterController extends Controller
{
   
    public function create(){

      return view('register');

    }

    public function store()
    {
        $this->validate(request(), [
            'register_name' => 'required',
            'register_email' => 'required|email',
            'register_password' => 'required'
        ]);
        
        $user = register::create(request(['register_name', 'register_email', 'register_password']));
        
        auth()->login($user);
        
        return redirect()->to('/register-listing');
    }
}
