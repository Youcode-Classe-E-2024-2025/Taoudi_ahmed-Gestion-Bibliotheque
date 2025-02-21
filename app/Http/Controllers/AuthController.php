<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
   //
   public function showLogin()
   {
      if (Auth::check()) {
         return redirect('/');
     }
      return view('auth.login');
   }

   public function showRegister()
   {
      if (Auth::check()) {
         return redirect('/');
     }
      return view('auth.register');
   }

   public function login(Request $request)
   {
      if (Auth::check()) {
         return redirect('/');
     }
      // Validate the incoming request data
      $validated = $request->validate([
         'email' => ['required', 'email', 'exists:users,email'],
         'password' => ['required', 'string'],
      ]);

      // Attempt to log the user in
      if (Auth::attempt([
         'email' => $validated['email'],
         'password' => $validated['password']
      ], $request->remember)) {
         // Authentication was successful
         return redirect()->intended('/books')->with('success', 'login successful.');
      }

      // If authentication fails, redirect back with an error message
      return back()->withErrors([
         'email' => 'The provided credentials are incorrect.',
      ])->withInput(); // Retain the old input values for the form (including email)
   }

   public function register(Request $request)
   {
      if (Auth::check()) {
         return redirect('/');
     }
      // Validate the incoming request data
      $validated = $request->validate([
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);

      $user = User::create([
         'name' => $validated['name'],
         'email' => $validated['email'],
         'role'=>'user',
         'password' => Hash::make($validated['password']),
      ]);

      return redirect('/login')->with('success', 'register successful.');
   }

   public function logout(Request $request){
      // Log the user out
      Auth::logout();
      return redirect('/login')->with('success', 'logout successful.');
   }
}
