@extends('layouts.front')

@section('content')
<div class="container mx-auto my-20">
    <section id="filters" class="flex flex-wrap -mx-3 mb-2">
        <div id="days" class="w-full md:w-1/3 px-3">
            <select name="" id="">
                <option value="">Monday</option>
                <option value="">Tuesday</option>
                <option value="">Wednesday</option>
                <option value="">Thursday</option>
                <option value="">Friday</option>
            </select>
        </div>
        <div id="styles" class="w-full md:w-1/3 px-3">
            <x-filters.styles />
        </div>
        <div id="level" class="w-full md:w-1/3 px-3">
            <select name="" id="">
                <option value="">All Levels</option>
                <option value="">Beginner</option>
                <option value="">Intermediate</option>
                <option value="">Advanced</option>
                <option value="">Expert</option>
                <option value="">Pro</option>
            </select>
        </div>
    </section>
    <div class="flex flex-wrap">
        @forelse ($courses as $course)
        <div class="w-full md:w-1/4">
            <div
                class="border {{ $course->hasStudent(Auth::user()->id) ? 'border-red-600': '' }} m-2 shadow hover:shadow-2xl rounded-lg overflow-hidden">
                <div class="p-3">
                    <span class="bg-red-700 px-2 rounded-full text-red-100 text-sm">
                        CHF {{ $course->full_price }}
                    </span>
                    <h2 class="font-semibold text-lg uppercase text-gray-700">{{ $course->name }}</h2>
                    @foreach ($course->teachers as $teacher)
                    <div class="inline-flex items-center mr-2 my-2">
                        <img src="{{$teacher->avatar}}" alt="" class="w-8 rounded-full">
                        <span class="truncate ml-1">{{ $teacher->firstname }}</span>
                    </div>
                    @endforeach
                    <br>
                    <div class="inline-flex text-gray-600 text-sm">
                        @include('icons.calendar', ['style' => 'w-4 text-gray-600 mr-2'])
                        {{ $course->start_date->format('d-m-Y') }} -
                        {{ $course->end_date->format('d-m-Y') }}</div>
                    <x-course-daily-schedule :course="$course" />
                    <div class="flex justify-between text-sm text-gray-600">
                        <span class="inline-flex items-center">@include('icons.level', ['style'=>'w-4
                            mr-2']){{ $course->level }}</span>
                        {{-- <span>CHF {{ $course->full_price }}</span> --}}
                    </div>
                </div>

                <div class="mb-3 mx-3">
                    @auth
                    @if ($course->hasStudent(Auth::user()->id))
                    <button disabled="disabled" class="bg-gray-200 text-red-700 p-2 rounded-full">
                        @include('icons.checked',['style'=>'w-5'])
                    </button>
                    @else
                    <form action="{{ route('registration.add', $course->id ) }}" method="post">
                        @csrf
                        <button type="submit" title="Register"
                            class="bg-gray-200 text-gray-700 hover:bg-red-800 hover:text-white p-2 rounded-full inline-flex items-center">
                            @include('icons.add', ['style' => 'w-5'])
                            {{-- Register --}}
                        </button>
                    </form>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
        @empty
        No courses available
        @endforelse
    </div>
</div>
@endsection