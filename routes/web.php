<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowAboutPage;

use function Pest\Laravel\get;

Route::get('/', function () {
  //  $PostList = Post::all();
  //  dump($PostList);
    return view('welcome');
})->name('/');


Route::get('/index' , [PostController::class, 'index'])->name('post.index');


Route::get('About', ShowAboutPage::class)->name('about');

// Route::redirect("/contact", "/");
Route::view("/contact", "contact");