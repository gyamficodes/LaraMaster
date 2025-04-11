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


// Route::get('about',  ShowAboutPageController::class)->name('about');

Route::view('about', 'about')->name('about');  // Add ->name('about')


// Route::redirect("/contact", "/");
Route::view("/contact", "contact")->name('contact');