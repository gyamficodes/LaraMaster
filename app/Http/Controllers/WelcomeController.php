<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
     $post = Post::with('user')->latest()->paginate(3);
        return view('welcome', ['posts' => $post]);
    }
}
