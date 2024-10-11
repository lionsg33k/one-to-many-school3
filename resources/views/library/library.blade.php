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
                type="button" class="" data-bs-toggle="modal" data-bs-target="#book">Add Blog</button>


        </div>

    </div>

    <div class="h-3/4 px-[2vw] flex flex-wrap items-start  gap-x-10  mt-[15vh]">

        @foreach ($books as $book)
            <div
                class="w-[28%] no-underline flex flex-col  gap-y-10 p-3 border border-black rounded-lg">
                <img class=" rounded-full object-cover" src="{{ asset('/storage/images/cover/' . $book->cover) }}"
                    alt="">

                <div class=" flex items-center justify-between  ">
                    <p class="mb-0 font-semibold text-black">{{ $book->name }}</p>
                    <a href="/books/show/{{ $book->id }}" class="px-8 py-2 rounded-lg no-underline bg-alpha text-black font-semibold capitalize">Discover Book</a>

                </div>
            </div>
        @endforeach
    </div>





    <div class="">
        @include('library.partials.create_category')
    </div>
    <div class="">
        @include('library.partials.create_book')
    </div>
@endsection
