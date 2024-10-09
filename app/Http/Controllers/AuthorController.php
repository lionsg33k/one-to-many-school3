<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $authors = Author::all();

        return view("author.author_post" , compact("authors"));
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
            "image" => "required|mimes:png,jpg,svg|max:2048"
        ]);

        $file = file_get_contents($request->image);
        $fileName = hash("sha256", $file) . "." . $request->image->getCLientOriginalExtension();
        Storage::disk("public")->put("images/" . $fileName, $file);

        Author::create([
            "name" => $request->name,
            "image"=> $fileName
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //

        return view("author.partials.author_show" , compact("author"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
