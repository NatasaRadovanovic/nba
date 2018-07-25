<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
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
        }
        return redirect('/');
    }
   public function destroy()
   {
       auth()->logout();
       return redirect('/');
   }
}
