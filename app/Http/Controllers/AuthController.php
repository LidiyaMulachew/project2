<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    
    
    public function signup()
        {
            return view('signup');

            
        }

        public function adminSignup(Request $request)
        {
            $validatedData = $request->validate([
                'First_name' => 'required|string|max:255',
                'Middle_name' => 'nullable|string|max:255',
                'Last_name' => 'required|string|max:255',
                'Email' => 'required|email|unique:users,Email',
                'Password' => 'required|string|min:8|confirmed',
            ]);
        
            $user = new User();
            $user->First_name = $validatedData['First_name'];
            $user->Middle_name = $validatedData['Middle_name'];
            $user->Last_name = $validatedData['Last_name'];
            $user->Email = $validatedData['Email'];
            $user->Password = Hash::make($validatedData['Password']);
            $user->save();
        
            return redirect()->route('admin')->with('success', 'Signup successful');
        }




        // app/Http/Controllers/AuthController.php
public function login()
{
    return view('login');
}


public function registration()
{
    return view('registration');
}

public function loginPost(Request $request){
    $request->validate([
       'email' =>'required' ,
       'password' =>'required' 

    ]);

    $credentials = $request->only('email', 'password');
    if(Auth::attempt($credentials)){
        return redirect()->intended('admin');
    }
    return redirect(route('login'))->with ("error", "Login details are not valid.");
}


public function registrationPost(Request $request){
    $request->validate([
       'name' =>'required' ,
       'email' =>'required|email|unique:users' ,
       'password' =>'required' 

    ]);


        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
    
        if(!$user){
            return redirect(route('registration'))->with ("error", "Registration failed, try again.");
        }
        return redirect(route('login'))->with ("success", "Registration success, Login to access.");

}


 function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('login'));
 }





/*

public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'Email' => 'required|email',
        'Password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('admin');
    }

    return back()->withErrors([
        'Email' => 'The provided credentials do not match our records.',
    ])->onlyInput('Email');
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}


*/





        public function admin()
        {
            return view('admin');

            
        }

        





        
    }