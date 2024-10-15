<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, "index"])->name("home");

//*  post 

Route::post("/post/store", [PostController::class, "store"])->name("post.store");


//*  comments 

Route::post("/comments/store", [CommentController::class, "store"])->name("comments.store");


//* Author + Blog

Route::get("/authors", [AuthorController::class, "index"])->name("authors.index");
Route::get("/author/show/{author}", [AuthorController::class, "show"])->name("authors.show");
Route::post("/authors/store", [AuthorController::class, "store"])->name("authors.store");

//^ blog 

Route::post("/blogs/store", [BlogController::class, "store"])->name("blogs.store");


//*  pdf 

Route::get("/books", [BookController::class, "index"]);

//! category 

Route::post("/category/store", [CategoryController::class, "store"])->name("category.store");

//! book

Route::post("/book/store", [BookController::class, "store"])->name("book.store");
Route::get("/books/show/{book}", [BookController::class, "show"])->name("books.show");

//*  teacher ( many 2 many)

Route::get("/teacher", [TeacherController::class, "index"])->name("teacher.index");
Route::post("/teacher/store", [TeacherController::class, "store"])->name("teacher.store");

//*  student ( many 2 many)

Route::get("/student", [StudentController::class, "index"])->name("student.index");
Route::post("/student/store", [StudentController::class, "store"])->name("student.store");
