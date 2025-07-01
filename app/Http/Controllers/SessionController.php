<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
class SessionController extends Controller
{
  public function  create(){
       return view('auth.login');
 }


  public function store(){
 $credentials =  request()->validate([
        'email' => 'required|email',
        'password' => 'required'
     ]);
   

     if (!Auth::attempt($credentials)) {
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials are incorrect'
        ]);
     }

     request()->session()->regenerate();
      return redirect()->route('post.index')->with('success', 'You are now logged in, Welcome');
  }

  public function destroy(){
    Auth::logout();
    return redirect()->route('/')->with('success', 'You are now logged out');
  }
   

}




