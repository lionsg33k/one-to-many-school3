@extends('layouts.index')
@section('content')
    
<div class="py-4  fixed top-0 flex items-center justify-between px-[2vw] w-5/6">
    <input class=" bg-[#f4f6f8] w-1/5 px-2 py-2 rounded-lg placeholder:text-black/90" type="search"
        placeholder="Search ...">

    <div class="flex gap-x-5 items-center">

        <!-- Button trigger modal author -->
        <button class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
            type="button" class="" data-bs-toggle="modal" data-bs-target="#createCategory">Add Category</button>

        <!-- Button trigger modal blog -->
        <button class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
            type="button" class="" data-bs-toggle="modal" data-bs-target="#blog">Add Blog</button>


    </div>

</div>







<div class="">
    @include("library.partials.create_category")
</div>
@endsection