@extends('layouts.front')



@section('seo')
<meta property="og:url" content="https://dancefloor.family/courses/{{ $course->id }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Dancefloor Studio | {{ $course->name }}" />
<meta property="og:description" content="{{ strip_tags($course->excerpt ) }}" />
<meta property="og:image" content="{{ asset('uploads/'. $course->thumbnail ) }}" />
@endsection

@section('content')

<div class="container mx-auto mt-16">
    <div class="flex justify-center mx-3">
        <div class="w-full">
            @include('courses.fields.header')
        </div>
    </div>

    <div class="max-w-7xl m-auto px-3 block">
        <div class="flex flex-wrap -mx-3 mt-8">
            <div class="w-full md:w-2/3 px-3">
                @include('courses.fields.main.default')
                @include('courses.fields.main.extra')
                @include('courses.fields.main.classroom')
            </div>
            <div class="w-full md:w-1/3 px-3">
                @include('courses.fields.sidebar.table')
            </div>
        </div>
    </div>


    {{-- @include('courses.fields.videos')
    @include('courses.fields.description')--}}
    @auth
    @can('crud_users')
    @include('courses.fields.students')
    @endcan
    @endauth


    @can('crud_courses')
    <div class="flex justify-center my-5">
        <div class="w-full md:w-3/5 my-5">
            <div class="flex justify-between">
                <div>
                    <a href="{{ route('courses.index') }}"
                        class="bg-gray-300 hover:bg-gray-400 py-2 px-4 rounded-lg mr-2 inline-flex items-center text-gray-800">
                        @include('icons.chevron-left', ['style' => 'w-4 h-4'])
                        <span class="ml-2">Back</span>
                    </a>
                </div>
                <div class="inline-flex">
                    <a href="{{ route('courses.edit', $course) }}"
                        class="bg-gray-300 hover:bg-gray-400 py-2 px-4 rounded-lg mr-2 inline-flex">
                        @include('icons.edit')
                        <span>Edit Course</span>
                    </a>
                    <form action="{{ route('courses.destroy', $course) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-700 hover:bg-red-800 py-2 px-4 rounded-lg text-white items-center">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endcan
    <br>


</div>

@endsection