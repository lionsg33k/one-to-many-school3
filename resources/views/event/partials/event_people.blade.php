@extends('layouts.index')

@section('content')
    <div class="py-4  fixed top-0 flex items-center justify-between px-[2vw] w-5/6">
        <input class=" bg-[#f4f6f8] w-1/5 px-2 py-2 rounded-lg placeholder:text-black/90" type="search"
            placeholder="Search ...">

        <div class="flex gap-x-5 items-center">



            <!-- Button trigger modal blog -->
            <button class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
                type="button" class="" data-bs-toggle="modal" data-bs-target="#people">Add People</button>


        </div>

    </div>

    <div class="pt-[15vh] px-2">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cover</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Show</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($events as $event)
                    <tr valign="middle" class="py-2">
                        <th scope="row"><img
                                class="w-20 h-20 object-cover "src="{{ asset('storage/images/eventCover/' . $event->cover) }}"
                                alt=""></th>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->description }}</td>
                        <td>
                            <div class="flex flex-col">
                                {{ $event->date }}
                                <div class="">{{ $event->start }} - {{ $event->end }}</div>
                            </div>
                        </td>
                        <td>
                            <!-- Button trigger modal blog -->
                            <button
                                class="bg-black/95 transition text-alpha px-3 py-2 rounded-lg hover:bg-alpha hover:text-black"
                                type="button" class="" data-bs-toggle="modal" data-bs-target="#participant{{ $event->id }}">Show Participants</button>

                        </td>
                        <td>
                            <div class="flex flex-col gap-y-3">

                                <form method="post" action="{{ route('event.update', $event->id) }}">
                                    @csrf @method('PUT')

                                    <button type={{ $event->accepted ? 'button' : 'submit' }}
                                        class="px-5 py-2 {{ $event->accepted ? ' border-1 border-alpha text-alpha cursor-not-allowed' : 'bg-alpha text-black' }}  rounded-lg">Accept</button>
                                </form>
                                <form method="post" action="{{ route('event.destroy', $event->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-5 py-2 bg-black text-alpha rounded-lg">Cancel</button>
                                </form>


                            </div>
                        </td>
                    </tr>

                    <div class="">
                        @include("event.partials.show_participant")
                    </div>
                @endforeach

            </tbody>
        </table>

    </div>



    <div class="">

        @include('event.partials.add_people')
    </div>
@endsection
