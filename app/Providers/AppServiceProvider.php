<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use App\Models\Comment;
use App\Policies\PostPolicy;
use App\Policies\CommentPolicy;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{

    protected $policies = [
        //This is PostPolicy class, which is responsible for authorizing actions on the Post model.
        Post::class => PostPolicy::class,
        Comment::class => CommentPolicy::class, // This line is added to register the CommentPolicy for the Comment model.
    ];
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer('*', function ($view) {
            $view->with('user', \Illuminate\Support\Facades\Auth::user());

            Route::pattern('id', '[0-9]+');
        });
    }
}
