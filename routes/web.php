<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name("home");

//*  post 

Route::post("/post/store", [PostController::class, "store"])->name("post.store");


//*  comments 

Route::post("/comments/store", [CommentController::class, "store"])->name("comments.store");
