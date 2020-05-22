<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\User;

class RegisterController extends Controller{
    use UploadTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){

      return view('register');

    }

    public function store(Request $request)
    {
        // Form validation
        $request->validate([
            'name' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        // Get current user
        $user = User::findOrFail(auth()->user()->id);

        $user->name = $request->input('name');

        // Check if a profile image has been uploaded
        if ($request->has('avatar')) {
            // Get image file
            $image = $request->file('avatar');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path 
            $folder = '/uploads/images/';
   
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
        
            $user->avatar = $filePath;
        }
        $users = User::create(request(['name', 'avatar', 'email', 'password', 'remember_token']));
        
        auth()->login($users);
          
        return redirect()->back()->with('alert-success', 'You are successfully registered');
    }
}
