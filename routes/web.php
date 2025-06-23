<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShowAboutPageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;

use function Pest\Laravel\get;

Route::get('/' , WelcomeController::class)->name('/');

// Profile routes
Route::singleton('/profile', ProfileController::class)
    ->name('profile', 'index')
    ->middleware('auth'); // Ensure the profile route is protected by authentication


Route::get('/posts', [PostController::class, 'index'])->name('post.index');   // to show posts
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');  // to show create form
 Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::middleware('auth')->group(function () {
  // Post routes
  Route::post('/posts', [PostController::class, 'store'])->middleware('auth');  // to save post
  Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
  Route::patch('/posts/{post}', [PostController::class, 'update']);
  Route::delete('/posts/{post}', [PostController::class, 'destroy']);
});

//Authentication routes
Route::get('/register', [RegisterUserController::class, 'create'])->name('auth.register'); // to show register form
Route::post('/register', [RegisterUserController::class, 'store']); // to register user

// Login routes
Route::get('/login', [SessionController::class, 'create'])->name('auth.login'); // to show login form
Route::post('/login', [SessionController::class, 'store']); // to login user
Route::post('/logout', [SessionController::class, 'destroy']); // to logout user

// stactic pages
Route::get('about', ShowAboutPageController::class)->name('about');  // Add ->name('about')
// Route::redirect("/contact", "/");
Route::view("contact", "contact")->name('contact');