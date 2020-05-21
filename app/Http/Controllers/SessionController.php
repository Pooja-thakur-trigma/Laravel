<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller

{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['register_email', 'register_password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/register-listing');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/register-listing');
    }
}