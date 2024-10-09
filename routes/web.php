<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, "index"])->name("home");

//*  post 

Route::post("/post/store", [PostController::class, "store"])->name("post.store");


//*  comments 

Route::post("/comments/store", [CommentController::class, "store"])->name("comments.store");


//* Author + Blog

Route::get("/authors" , [AuthorController::class , "index"])->name("authors.index");
Route::get("/author/show/{author}" , [AuthorController::class , "show"])->name("authors.show");
Route::post("/authors/store" , [AuthorController::class , "store"])->name("authors.store");

//^ blog 

Route::post("/blogs/store" , [BlogController::class , "store"])->name("blogs.store");

