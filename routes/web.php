<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use function Pest\Laravel\get;

// Route::get('/', function () {
//    $PostList = Post::all();
//    dump($PostList);
//     return view('welcome');
// });


Route::get('/index' , [PostController::class, 'index'])->name('post.index');


Route::get('/about', function ()  {
  return view('About')->name('About');
});

// Route::redirect("/contact", "/");
Route::view("/contact", "contact");