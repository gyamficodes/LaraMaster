<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CommentController extends Controller
{
    use AuthorizesRequests;
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

        public function destroy(Comment $comment)
        {
            // Check if the authenticated user is the owner of the comment
            $this->authorize('delete', $comment);
            if (Auth::id() !== $comment->user_id) {
                return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
            }

            // Delete the comment
            $comment->delete();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Comment deleted successfully.');
        }
}

