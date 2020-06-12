@extends('layouts.back')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="max-w-5xl">
            @include('courses.fields.default')
        </div>
    </div>

    @include('courses.show_fields')

    <div>
        zoom: {{$course->online_link }}
        id: {{$course->online_id }}
        password: {{$course->online_password }}
    </div>

    <div class="my-10">
        <a href="{{ route('courses.edit', $course) }}"
            class="bg-red-700 text-white rounded-full py-2 px-3 hover:bg-red-800 inline-flex mr-2">
            @include('icons.edit')
            <span>Edit Course</span>
        </a>
        <a href="{{ route('courses.index') }}" class="hover:bg-gray-300 py-2 px-3 rounded-full">Back</a>
    </div>


</div>
@endsection