<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowAboutPageController;
use function Pest\Laravel\get;

Route::get('/', function () {
  //  $PostList = Post::all();
  //  dump($PostList);
    return view('welcome');
})->name('/');


Route::get('/posts', [PostController::class, 'index'])->name('post.index');   // to show posts
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');  // to show create form
Route::post('/posts', [PostController::class, 'store']);  // to save post
Route::get('/posts/{post}', [PostController::class , 'show'])->name('post.show');



Route::get('about',  ShowAboutPageController::class)->name('about');  // Add ->name('about')
// Route::redirect("/contact", "/");
Route::view("contact", "contact")->name('contact');