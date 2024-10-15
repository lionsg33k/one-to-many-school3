@extends('layouts.index')

@section('content')
    <form class="flex flex-col gap-y-6" action="{{ route("student.store") }}" method="post">
        @csrf


        <input type="text" placeholder="insert Student name" name="name">

        <div class="flex items-center gap-x-8">

            @foreach ($teachers as $teacher)
                <div class="">

                    <input value="{{ $teacher->id }}" type="checkbox" name="teachers[]">
                    <label for="">{{ $teacher->name }}</label>
                </div>
            @endforeach

        </div>

        <button class="bg-black text-white" type="submit">save</button>
    </form>

    <hr><hr><hr>

    @foreach ($students as $student)
        <h1>Student : {{ $student->name }}</h1>

        <h4>Signed  in </h4>

        @foreach ($student->teachers as $teacher)
            <p>{{ $teacher->name }}</p>
        @endforeach
    @endforeach
@endsection
