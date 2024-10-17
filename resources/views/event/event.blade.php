@extends('layouts.index')

@section('content')
    <div class="py-4  fixed top-0 flex items-center justify-between px-[2vw] w-5/6">

        <a class="no-underline text-black bg-alpha px-4 py-2 rounded-lg" href="/event/people"> Create people</a>
        <div class="flex gap-x-5 items-center">

            <!-- Button trigger modal blog -->
            <button class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
                type="button" class="" data-bs-toggle="modal" data-bs-target="#event">Add Event</button>

        </div>

    </div>


    <div class="pt-[15vh] flex gap-x-3 flex-wrap">
        @foreach ($events as $event)
            <div class="w-[31%] border flex flex-col gap-y-4 p-2">

                <img class="w-full h-52 object-cover "src="{{ asset('storage/images/eventCover/' . $event->cover) }}"
                    alt="">

                <div class="flex items-center justify-between">
                    <h3 title="event will start {{ $event->date }} at {{ $event->start }}" class="mb-0 text-lg font-bold">{{ $event->name }}</h3>
                    <a class="no-underline bg-alpha text-black px-5 py-2 rounded-lg" href="/event/show/{{ $event->id }}">Discover</a>
                </div>
            </div>
        @endforeach



    </div>



    <div class="">
        @include('event.partials.add_event_modal')
    </div>
@endsection
