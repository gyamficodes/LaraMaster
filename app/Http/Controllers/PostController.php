<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::with('user')->latest()->paginate(8);
        return view('posts.index', ['posts' => $post]);
    }

    public function create()
    {
        // Check if the user is logged in
        if (Auth::guest()) {
            return redirect()->route('auth.login')->with('error', 'You must be logged in to create a post');
        }
        return view('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        request()->validate([
            "title" => ['required', 'min:4'],
            "body" => ['required', 'min:10'],
        ]);

        Post::create([
            "title" => request('title'),
            "body" => request('body'),
            "user_id" => Auth::id(), // Get the ID of the currently authenticated user
        ]);

        return redirect()->route('post.index')->with('success', 'Post created successfully!');
        ; // Redirect to posts list
    }

    public function edit(Post $post)
    {
        $this->authorize('edit', $post);
        // Check if the user is logged in
        if (Auth::guest()) {
            return redirect()->route('auth.login')->with('error', 'You must be logged in to edit a post');
        }

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        $this->authorize('view', $post); // Check if the user is authorized to view the post
            
         if (Auth::guest()) {
            return redirect()->route('auth.login')->with('error', 'You must be logged in to edit a post');
        }

        return view('posts.show', ['post' => $post]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        $this->authorize('update', $post);

        $validatedData = request()->validate([
            "title" => ['required', 'min:4'],
            "body" => ['required', 'min:10'],
        ]);

        $post->update($validatedData);

        return redirect()->route('post.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();

        return redirect()->route('post.index')->with('success', 'Post deleted successfully!');
    }
}
















