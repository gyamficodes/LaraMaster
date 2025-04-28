<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::with('user')->latest()->paginate(10);
        return view('posts.index', ['posts' => $post ]);
    }

    public function create(){
        return view('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            "title" => ['required', 'min:4'],
            "name" => ['required'],
            "body" => ['required', 'min:10'], 
        ]);
    
        Post::create([
            "title" => request('title'),
            "name" => request('name'),
            "body" => request('body'),
            "user_id" => 1
        ]);
    
        return redirect()->route('post.index'); // Redirect to posts list
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
















