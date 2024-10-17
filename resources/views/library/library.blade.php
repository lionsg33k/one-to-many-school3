@extends('layouts.index')
@section('content')


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
