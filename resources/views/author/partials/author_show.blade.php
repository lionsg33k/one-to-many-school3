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
@endforeach


    </div>
@endsection
