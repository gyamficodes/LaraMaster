<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use App\Models\User;
use \Illuminate\Support\Facades\Hash;
use  \Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
        $user = Auth::user();
        return view('profile.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
        $user = Auth::user();
        return view('profile.edit', ['user' => $user]);
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
        $user = User::find(Auth::id());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
            'bio' => 'nullable|string|max:500',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if ($request->hasFile('avatar')) {
            // Delete the old avatar if it exists
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }
        if (!empty($validatedData['password'])) {
            $user->password =   Hash::make($validatedData['password']);
        }

        $user->bio = $validatedData['bio'] ?? null; // Update bio if provided

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
