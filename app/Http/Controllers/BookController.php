<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view("library.library");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        request()->validate([
            "name" => "required",
            "cover" => "required|mimes:png,jpg,svg",
            "gallery.*" => "required|mimes:png,jpg,svg",
            "book" => "required|mimes:pdf",
            "author_id" => "required|integer",
            "category_id" => "required|integer",
        ]);

        //* cover

        $cover = file_get_contents($request->cover);
        $coverName = hash("sha256", $cover) . "." . $request->cover->getClientOriginalExtension();
        Storage::disk("public")->put("images/cover/" . $coverName, $cover);

        //! PDF

        $book = file_get_contents($request->book);
        $bookName = hash("sha256", $book) . "." . $request->book->getClientOriginalExtension();
        Storage::disk("public")->put("pdf/" . $bookName, $book);

        $book  = Book::create([
            "name" => $request->name,
            "author_id" => $request->author_id,
            "category_id" => $request->category_id,
            "cover" => $coverName,
            "pdf" => $bookName,
        ]);


        $images  = $request->gallery;

        //* store  image gallery
        foreach ($images as $image) {
            $img = file_get_contents($image);
            $imgName = hash("sha256", $img) . "." . $image->getClientOriginalExtension();
            Storage::disk("public")->put("images/gallery/" . $imgName, $img);

            Bookimg::create([
                "image" => $imgName,
                "book_id" => $book->id,
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //

        
        return view("library.partials.book_show" , compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
