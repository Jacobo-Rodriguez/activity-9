<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

use App\Mail\LoginAlertMail;

class AuthController extends Controller
{

    public function showLogin(){
        return view('login');
    }

    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){

        $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
        ]);

        Mail::to($user->email)->send(new WelcomeMail($user));

        Auth::login($user);

        return redirect('/dashboard');

        }

    public function login(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){

            $user = Auth::user();

            Mail::to($user->email)->send(new LoginAlertMail($user));

            return redirect('/dashboard');
        }

        return back()->with('error','Invalid credentials');
    }

    public function logout(){

        Auth::logout();

        return redirect('/');
    }
}