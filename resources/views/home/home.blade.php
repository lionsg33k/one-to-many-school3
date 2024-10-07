@extends('layouts.index')

@section('content')
    <div class="flex items-center justify-center py-8">

        <form method="post" class="flex flex-col w-3/4 gap-y-3" action="{{ route('post.store') }}">
            @csrf
            <textarea required class="border-2 border-black px-8 py-3" placeholder="Post  an idea ..." name="description"
                id=""></textarea>
            <button class="bg-black text-alpha py-2">Create</button>
        </form>


    </div>
    <hr>
    <hr>
    <div class="px-8">

        <div class="flex flex-col gap-y-8">
            @foreach ($posts as $post)
                <div class="flex flex-col gap-y-3">

                    <h3>{{ $post->description }}</h3>

                    <div class="flex flex-col gap-y-2">

                        @foreach ($post->comments as $comment)
                            <p class=""> {{ $comment->description }}</p>
                        @endforeach
                    </div>

                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <input name="post_id" type="hidden" value="{{ $post->id }}">
                        <input placeholder="Add comemnts" class="border-2 px-2 py-1" type="text" name="description"
                            id="">
                        <button class="bg-black text-alpha rounded-full px-2 py-1">Add Comment</button>
                    </form>

                </div>
            @endforeach
        </div>

    </div>
@endsection
