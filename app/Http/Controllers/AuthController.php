<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    //
    public function showLogin(){
       return view('auth.login');
    }

    public function showRegister(){
       return view('auth.register');
    }

    public function login(){
      return view('auth.login');
   }

   public function register(){
      // dd(request());
     
      return redirect('/');
   }
}
