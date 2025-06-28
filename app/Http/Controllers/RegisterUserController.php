<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Storage;

class RegisterUserController extends Controller
{
     public function  create(){
           return view('auth.register');
       }


  
public function store(Request $request){
    $request->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8', 'confirmed'],
        'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], // Correct validation
    ]);

    // Create the user
    $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password')),
        'avatar' => null, // This initializes it to null in the first database INSERT.
    ]);

    // This part is good: it checks if a file was uploaded and updates the user.
    if ($request->hasFile('avatar')) {
        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $path; // Assigns the path to the user object
        $user->save(); // CRITICAL: This line saves the updated 'avatar' field to the database.
    }

    // Log the user in
    auth()->guard()->login($user);

    return redirect()->route('post.index')->with('success', 'User registered successfully!');
}

}
