<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail; 
use App\Mail\VerifyMail; 

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
   
    public function create()
    {
        return view('auth.create-login');
    } 

    public function store()
    {
        $credentials = request()->only(['email', 'password']);
        if(!auth()->attempt($credentials)){   
        return redirect()->back()->withErrors([
            'message' => 'Bad credentials. Please try again.'
         ]);
        }else if(auth()->user()->is_verified === 0){
            auth()->logout();
            return "Check your email!We sent you your verification code. ";
        }
        
        return redirect('/');
    }
   public function destroy()
   {
       auth()->logout();
       return redirect('/login');
   }
}
