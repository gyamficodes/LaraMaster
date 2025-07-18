<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
protected $table = "comments";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
protected $fillable = ['body', 'user_id', 'post_id'];

public function user(){
    return $this->belongsTo(User::class);
}

public function post(){
    return $this->belongsTo(Post::class);
}

}
