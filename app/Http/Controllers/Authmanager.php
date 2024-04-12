<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authmanager extends Controller
{
    function login(){
        return view('login');
    }
    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        /*this line of code will verify if the email and password are present and if not, it
         will return an error, asking the user to enter the email and/or password*/
        $request->validate([
           'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('welcome');
        }
        return redirect(route('login'))->withErrors(['email'=>'Invalid email or password']);
    }
    function registerPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('password'));
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->withErrors(['user does not exist, please try again']);
        }
        return redirect(route('login'))->with(['success','registered successfully, please login']);
    }
    function logout(){
        //phpSession::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
