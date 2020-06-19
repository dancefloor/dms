@extends('layouts.front')

@section('css')
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
@endsection

@section('content')

@guest
<main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    <div class="sm:text-center lg:text-left">
        <h2
            class="text-4xl tracking-tight leading-10 font-extrabold text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to dancefloor
            <br class="xl:hidden" />
            <span class="text-red-700">online classes
            </span>
        </h2>
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Dancing makes us happy! and we are committed to keep sharing our passion for dancing no matter what. Please
            sign-in and register to start enjoying one of our classes.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                <a href="{{ route('login') }}"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-red-800 focus:shadow-outline-red transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Login
                </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="{{ route('register')}}"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-red-700 bg-red-200 hover:text-red-100 hover:bg-red-500 focus:outline-none focus:shadow-outline-indigo focus:border-red-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Register
                </a>
            </div>
        </div>
    </div>
</main>
@endguest

<div class="container mx-auto my-20">
    <section id="filters" class="flex flex-wrap -mx-3 mb-2">
        <div class="px-3 my-1">
            <a href="{{ route('welcome') }}"
                class="inline-flex justify-center w-24 bg-white border rounded-lg px-4 py-2 text-sm leading-5 font-medium text-gray-600 hover:text-gray-500 focus:outline-none focus:border-red-200 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
                @include('icons.all', ['style'=>'w-4 mr-2'])
                All
            </a>
        </div>
        <div id="days" class="px-3 my-1">
            <x-filters.days />
        </div>
        <div id="styles" class="px-3 my-1">
            <x-filters.styles />
        </div>
        <div id="level" class="px-3 my-1">
            <x-filters.level />
        </div>
    </section>
    <div class="flex flex-wrap">
        @forelse ($courses as $course)

        @auth
        @switch(auth()->user()->registrationStatus($course->id))
        @case('["pending"]')
        @php $border = 'border-orange-400'; @endphp
        @break
        @case('["waiting"]')
        @php
        $border = 'border-blue-600';
        @endphp
        @break
        @case('["payed"]')
        @php
        $border = 'border-green-600';
        @endphp
        @break
        @case('["standby"]')
        @php
        $border = 'border-pink-600';
        @endphp
        @break
        @default
        @php
        $border = 'border-gray-800';
        @endphp
        @endswitch
        @endauth


        <div class="w-full md:w-1/4">
            <div
                class="border @auth {{ $course->hasStudent(Auth::user()->id) ? $border : '' }} @endauth m-2 shadow hover:shadow-2xl rounded-lg overflow-hidden">
                {{-- <div class="p-3"> --}}
                <div class="px-3 pt-3 pb-1">
                    {{-- <span class="bg-red-700 px-2 rounded-full text-red-100 text-sm float-right"> --}}
                    <div class="flex justify-between items-start">
                        <div class="w-56">
                            <h2 class="font-semibold text-lg uppercase text-gray-700">{{ $course->name }}</h2>
                            @foreach ($course->styles as $item)
                            <span class="bg-red-700 text-red-100 text-xs uppercase px-2 rounded-full mb-3 inline-block">
                                {{ $item->name }}
                            </span>
                            @endforeach
                        </div>
                        <span class="text-red-700 text-sm font-bold mt-1 w-16 text-right">
                            CHF {{ $course->full_price }}
                        </span>
                    </div>
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
                    @foreach ($course->teachers as $teacher)
                    <div class="inline-flex items-center mr-2 my-2">
                        <img src="{{$teacher->avatar}}" alt="" class="w-8 rounded-full">
                        <span class="truncate ml-1">{{ $teacher->firstname }}</span>
                    </div>
                    @endforeach
                </div>
                @auth
                <div class="flex justify-between mb-3 mx-3 items-center">
                    <span class="text-xs text-gray-600">
                        10 places left
                        {{-- {{  == '' ? 'YEES' : 'NON' }} --}}
                    </span>
                    <div class="">
                        @if ($course->hasStudent(Auth::user()->id))

                        @switch(auth()->user()->registrationStatus($course->id))

                        @case('["pending"]')
                        <span id="pending" class="bg-gray-200 text-orange-600 p-2 rounded-full inline-flex">
                            @include('icons.pending',['style'=>'w-5'])
                        </span>
                        @break
                        @case('["waiting"]')
                        <span id="waiting" class="bg-gray-200 text-blue-600 p-2 rounded-full inline-flex">
                            @include('icons.waiting',['style'=>'w-5'])
                        </span>
                        @break
                        @case('["payed"]')
                        <span id="registered" class="bg-gray-200 text-green-700 p-2 rounded-full inline-flex">
                            @include('icons.checked',['style'=>'w-5'])
                        </span>
                        @break
                        @case('["standby"]')
                        <button id="standby" disabled="disabled" class="bg-gray-200 text-pink-400 p-2 rounded-full">
                            @include('icons.standby',['style'=>'w-5'])
                        </button>
                        @break
                        @default
                        <button id="cancelled" disabled="disabled" class="bg-gray-200 text-gray-800 p-2 rounded-full">
                            @include('icons.x-circle-thin',['style'=>'w-5'])
                        </button>
                        @endswitch

                        @else
                        <form action="{{ route('registration.add', $course->id ) }}" method="post">
                            @csrf
                            <button id="register" type="submit" title="Register"
                                class="bg-gray-200 text-gray-700 hover:bg-red-800 hover:text-white p-2 rounded-full inline-flex items-center">
                                @include('icons.cross', ['style' => 'w-3'])
                                {{-- Register --}}
                            </button>
                        </form>
                        @endif
                    </div>

                </div>
                @endauth
            </div>
        </div>
        @empty
        No courses available
        @endforelse
    </div>
</div>
@endsection

@push('scripts')
<!-- Development -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>


<!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script>
    tippy('#register',      {content: "{{ "Register to class" }}",});
    tippy('#registered',    {content: "{{ "You are registered" }}",});
    tippy('#waiting',       {content: "{{ "This class is full, you are in the waiting list" }}",});
    tippy('#pending',       {content: "{{ "You are pre-registered, proceed to pay to complete registration" }}",});
</script>
@endpush