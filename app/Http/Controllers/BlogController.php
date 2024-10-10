<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            "blog" => "required",
            "author_id" => "required",
            // "images.*" => "required|mimes:png,jpg,svg|max:2048"
        ]);
        $images = $request->images;

        $blog = Blog::create([
            "blog" => $request->blog,
            "author_id" => $request->author_id,
        ]);

        if ($images) {
            foreach ($images as $image) {

                $file = file_get_contents($image);
                $fileName = hash("sha256", $file) . "." . $image->getClientOriginalExtension();
                Storage::disk("public")->put("images/" . $fileName, $file);
                Image::create([
                    "image" => $fileName,
                    "blog_id" => $blog->id
                ]);
            }
        }


        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
