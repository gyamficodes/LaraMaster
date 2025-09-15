<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;

class CommentPolicy
{
    /**
     * Create a new policy instance.
     */
    private function isOwner(User $user, Comment $comment)
    {
        return $user->id === $comment->user_id;
    }
    public function delete(User $user, Comment $comment)
    {
        return $this->isOwner($user, $comment);
    }
}
