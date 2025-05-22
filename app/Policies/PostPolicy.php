<?php

namespace App\Policies;

use App\Models\User;
 use App\Models\Post;

class PostPolicy
{



    private function isOwner(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    // public function view(User $user, Post $post)
    // {
    //     return $this->isOwner($user, $post);
    // }

    public function view(?User $user, Post $post)
{
    // Anyone can view, even guests (null $user)
    return true;
}

    public function edit(User $user, Post $post)
    {
        return $this->isOwner($user, $post);
    }

    public function update(User $user, Post $post)
    {
        return $this->isOwner($user, $post);
    }

    public function delete(User $user, Post $post)
    {
        return $this->isOwner($user, $post);
    }


}
