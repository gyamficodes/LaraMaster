<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
class RegisterUserController extends Controller
{
     public function  create(){
           return view('auth.register');
       }


  public function store(){
    request()->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8', 'confirmed']
    ]);

    // Create the user
    $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password')),
    ]);

    // Log the user in
    auth()->guard()->login($user);

    return redirect()->route('post.index')->with('success', 'User registered successfully!');
  }



}
