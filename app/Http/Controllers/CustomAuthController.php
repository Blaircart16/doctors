<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class CustomAuthController extends Controller
{
    public function register (){
        return view ('register');
    }
    public function registerPost(Request $request){
        $user = new User();
        $user->name = 'Some name';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Registration Successful');
    }

    public function login(){
        return view ('login');
    }
    public function loginPost (Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)){
            return redirect('/home')->with('sucess', 'login sucessful');
        }
        return back()->with('error', 'Invalid Email or Password');
    }
    public function logout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function profile()
    {
        return view('profile');
    }
}
