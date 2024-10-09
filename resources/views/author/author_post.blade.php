@extends('layouts.index')
@section('content')
    <div class="py-4  fixed top-0 flex items-center justify-between px-[2vw] w-5/6">
        <input class=" bg-[#f4f6f8] w-1/5 px-2 py-2 rounded-lg placeholder:text-black/90" type="search"
            placeholder="Search ...">

        <div class="flex gap-x-5 items-center">

            <!-- Button trigger modal author -->
            <button class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
                type="button" class="" data-bs-toggle="modal" data-bs-target="#author">Add Author</button>

            <!-- Button trigger modal blog -->
            <button class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
                type="button" class="" data-bs-toggle="modal" data-bs-target="#blog">Add Blog</button>


        </div>

    </div>

    <div class="h-3/4 px-[2vw] flex flex-wrap items-start  gap-x-10  mt-[15vh]">

        @foreach ($authors as $author)
            <a href="/author/show/{{ $author->id }}"
                class="w-[28%] no-underline flex items-center gap-x-3 p-3 border border-black rounded-lg">
                <img class="w-14 h-14 rounded-full object-cover" src="{{ asset('/storage/images/' . $author->image) }}"
                    alt="">

                <div class=" flex flex-col  ">
                    <p class="mb-0 font-semibold text-black">{{ $author->name }}</p>
                    <p class="mb-0  text-gray-400">{{ $author->created_at->format('d-M-y') }}</p>
                </div>
            </a>
        @endforeach
    </div>



    <div class="">
        @include('author.partials.create_author')
    </div>
    @include('author.partials.create_blog')
@endsection
