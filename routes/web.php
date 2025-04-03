<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
   $PostList = Post::all();
   dump($PostList);
    return view('welcome');
});

Route::get('/about', function ()  {
  return view('About');
});

// Route::redirect("/contact", "/");
Route::view("/contact", "contact");