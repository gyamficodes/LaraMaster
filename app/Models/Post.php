<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $table = "posts";
  protected  $filliable = ['title', 'body', 'user_id'. 'name'];

 public function  user(){
    return $this->belongsTo(User::class);
 }

}
