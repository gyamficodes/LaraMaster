<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    //
      public function store( Request $request, Post $post)
      {
          // Validate the request data
          $request->validate([
              'body' => 'required|string|max:1000',
          ]);

          // Create a new comment
          $comment = new Comment();
          $comment->user_id = Auth::user()->id; // Assuming the user is authenticated
          $comment->post_id = $post->id; // Use the Post model instance
          $comment->body = $request->input('body');
          $comment->save();

          // Redirect back to the post with a success message
          return redirect()->route('post.show', ['post' => $post->id])
              ->with('success', 'Comment added successfully!');

      }
}
