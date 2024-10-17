@extends('layouts.index')

@section('content')
    <div class="py-4  fixed top-0 flex items-center justify-between px-[2vw] w-5/6">
        <input class=" bg-[#f4f6f8] w-1/5 px-2 py-2 rounded-lg placeholder:text-black/90" type="search"
            placeholder="Search ...">

        <div class="flex gap-x-5 items-center">



            <!-- Button trigger modal blog -->
            <a href="/event"
                class="bg-black/95 no-underline transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black">See
                all events</a>


        </div>

    </div>


    <div class="pt-[15vh] px-3 flex">

        <img class="w-1/2 h-[80vh] object-cover "src="{{ asset('storage/images/eventCover/' . $event->cover) }}"
            alt="">

        <div class="w-1/2 p-3 flex flex-col justify-between">
            <div class="">

                <h1 class="font-bold">{{ $event->name }}</h1>
                <h3 class="text-base font-semibold">Organized by {{ $event->people->name }}</h3>
                <p class="text-gray-500">Event will start {{ $event->date }} {{ $event->start }}</p>
                <p class="">{{ $event->description }}</p>

            </div>


            <form method="post" class="flex flex-col gap-y-2" action="{{ route("event.participate" , $event->id) }}">

                @csrf
                <div class="flex items-center gap-x-6  w-full overflow-x-auto">

                    @foreach ($participants as $participant)
                        <div class="flex gap-x-3 items-center">
                            <input name="participant[]" value="{{ $participant->id }}" type="checkbox">
                            <option value="{{ $participant->id }}">{{ $participant->name }}</option>
                        </div>
                    @endforeach

                </div>


                <button class="w-full p-2 bg-alpha text-black rounded-lg">Participate</button>

            </form>

        </div>



    </div>
@endsection
