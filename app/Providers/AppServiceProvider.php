<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        $authors = Author::all();
        $categories = Category::all();
        $books = Book::all();

        view()->share([
            "authors" => $authors,
            "categories" => $categories,
            "books" => $books,
        ]);
    }
}
