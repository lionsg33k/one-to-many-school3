@extends('layouts.index')

@section('content')
    <form action="{{ route('teacher.store') }}" method="post">
        @csrf


        <input type="text" placeholder="insert teacher name" name="name">

        <button type="submit">save</button>
    </form>

    <hr>
    <hr>
    <hr>

    @foreach ($teachers as $teacher)
        <h1>Teacher : {{ $teacher->name }}</h1>
        @forelse ($teacher->students as $student)
            <h4>{{ $student->name }}</h4>
        @empty
        <h4>This teacher doesn t have any stydent yet</h4>
        @endforelse
    @endforeach
@endsection
