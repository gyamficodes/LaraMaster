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


Route::get('/index' , [PostController::class, 'index'])->name('post.index');
Route::get('/create', [PostController::class, 'create'])->name('post.create');
Route::post('posts', [PostController::class, 'store']);


Route::get('about',  ShowAboutPageController::class)->name('about');  // Add ->name('about')

// Route::redirect("/contact", "/");
Route::view("contact", "contact")->name('contact');