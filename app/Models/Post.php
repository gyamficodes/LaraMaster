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
//  protected $fillable = ['title', 'name', 'body', 'user_id'];m
protected $fillable = ['title','body', 'user_id', 'image'];


 public function  user(){
    return $this->belongsTo(User::class);
 }

 public function comments(){
    return $this->hasMany(Comment::class);
 }

}
