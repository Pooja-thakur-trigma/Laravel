<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //use AuthenticatesUsers;
    public function create()
    {
        return view('login');
    }
    
    public function store(Request $request)
    {


        $this->validate($request, [
            'email' => 'required',
            // If you are logging in the user via email, change the username to email
            'password'  => 'required'
        ]);
    /*
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
*/
        if (! Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            echo"error";
        }
    
        
        return redirect()->back();
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->back();
    }
}