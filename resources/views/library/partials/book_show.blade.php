@extends('layouts.index')

@section('content')
    <div class="h-72">

        <div id="bookCarousel{{ $book }}" class="carousel slide  ">
            <div class="carousel-inner">


                @foreach ($book->bookimgs as $image)
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/images/gallery/' . $image->image) }}" class="object-cover w-full h-72"
                            alt="...">
                    </div>
                @endforeach




            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel{{ $book }}"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel{{ $book }}"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div class="">

        <h1>{{ $book->name }}</h1>
        <p>{{ $book->category->name }}</p>

    </div>


    <a download="" href="{{ asset('storage/pdf/' . $book->pdf) }}" class="px-8 py-2 bg-alpha no-underline text-black rounded-lg" >Download</a>
    <iframe class="h-80" src="{{ asset('storage/pdf/' . $book->pdf) }}" frameborder="0"></iframe>
@endsection
