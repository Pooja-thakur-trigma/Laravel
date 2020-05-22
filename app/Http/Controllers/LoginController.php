<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Redirect;

class LoginController extends Controller{

    public function create()
    {
        return view('login');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password'  => 'required'
        ]);
    
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
           return redirect()->back()->with('alert-success', 'You are successfully logged in'); // if the credentials were correct, Auth::attempt will log in the user automatically and you can redirect the user to the intended page. Moreover, using the ->with() method, you can store a message in a session, which can be accessed on the next page. (se explanation under)
       }else{
        return back()->with('alert-error', 'The email or password is incorrect, please try again');
      }
      
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->back();
    }
}