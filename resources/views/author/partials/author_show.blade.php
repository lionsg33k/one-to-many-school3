@extends('layouts.index')

@section('content')
    <div class="h-[30vh] bg-alpha relative">

        <img class="w-24 h-24 rounded-full absolute -bottom-10 left-1/2 -translate-x-1/2 "
            src="{{ asset('storage/images/' . $author->image) }}" alt="">
        </div>
        <div class="py-5 w-full text-center font-bold text-2xl">{{ $author->name }}</div>

    <div class="">

        @foreach ($author->blogs as $blog)
            <h1>{{ $blog->blog }}</h1>

            @if ($blog->images->count() > 0)
                <div id="blogCarousel{{ $loop->iteration }}" class="carousel slide w-80 h-80 ">
                    <div class="carousel-inner">
                        
                        @foreach ($blog->images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? "active" : "" }}">
                            
                            <img class=" "
                                src="{{ asset('storage/images/' . $image->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    @if ($blog->images->count() > 1)
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#blogCarousel{{ $loop->iteration }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#blogCarousel{{ $loop->iteration }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            @endif
        @endforeach
    @endsection
