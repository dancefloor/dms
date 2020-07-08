@extends('layouts.front')

@section('content')

<div class="container mx-auto">

    @auth
    @if (auth()->user()->isRegistered($course->id))
    {{-- @foreach (auth()->user()->registrationStatus($course->id) as $i)
    {{$i}}
    @endforeach --}}
    @if (auth()->user()->registrationStatus($course->id) == '["paid"]')

    <div>
        You are registered
    </div>
    @else
    <div class="bg-orange-300 text-orange-700 mt-10 p-4 rounded-lg font-bold">
        You are pre-registered, please proceed to pay to complete your registration on your
        <a href="{{ route('dashboard') }}" class="underline">Dashboard</a>
    </div>
    @endif
    @endif
    @endauth

    <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center">
            <h2
                class="text-4xl tracking-tight leading-10 font-extrabold text-gray-800 sm:text-5xl sm:leading-none md:text-6xl uppercase">
                Intensive week
                <br class="xl:hidden" />
                <span class="text-red-700">Salsa fusion
                </span>
            </h2>
            <div class="flex justify-center">
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    with Kouame DANCEFLOOR & Fred DANCEFLOOR
                </p>
            </div>

            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                <div class="rounded-md shadow">

                    @auth
                    @if (!auth()->user()->isRegistered($course->id))
                    <form action="{{ route('registration.add', $course->id) }}" method="post">
                        @csrf
                        <button type="submit" id="register" title="Register"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Select course
                        </button>
                    </form>
                    @else
                    <a href="{{ route('dashboard') }}"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Dashboard
                    </a>
                    @endif
                    @else
                    <a href="{{ route('login') }}"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Sign-in
                    </a>
                    @endauth

                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#details"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-red-800 bg-red-200 hover:text-red-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Details
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="flex justify-center my-20">
    <iframe
        src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDancefloorGeneva%2Fvideos%2F529697621057960%2F&show_text=0&width=560"
        width="700" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
        allowTransparency="true" allowFullScreen="true"></iframe>
</div>


<div id="details" class="bg-gray-900 text-gray-100 py-20">
    <div class="container mx-auto">
        <div class="flex flex-wrap my-16">
            <div class="w-full md:w-1/2">
                <div class="flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                        <img class="w-full" src="{{ asset('images/salsa-fusion.png')}}"
                            alt="Salsa fusion by Dancefloor">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-gray-800">1:15 from Monday to Friday</div>
                            <ul class="text-gray-700 text-base list-disc pl-5">
                                <li>Learn the Dancefloor Fusions Style</li>
                                <li>Improve your foundations: Groove, Isolation, Afro Movement</li>
                                <li>Learn how to introduce Urban dances and Afro in your salsa</li>
                                <li>Get the special tips to make your moves look better</li>
                            </ul>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 mr-2">#groove</span>
                            <span
                                class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 mr-2">#isolations</span>
                            <span
                                class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800">#afro-moves</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-5">
                <h3 class="text-4xl font-bold my-4">Details</h3>

                <div class="inline-flex">
                    @include('icons.calendar')
                    <span class="ml-2">
                        From 13th to 17th of July
                    </span>
                </div>
                <br>
                <div class="inline-flex">
                    @include('icons.time')
                    <span class="ml-2">
                        7 pm to 8:15 pm CET.
                    </span>
                </div>
                <br>
                <div class="inline-flex">
                    @include('icons.level')
                    <span class="ml-2">Level - Open level with salsa foundations.</span>
                </div>
                <br>
                <div class="inline-flex">
                    @includeif('icons.euro') <span class="ml-2">Price: 40 €</span>
                </div>
                <ul class="text-lg list-disc pl-5 my-5">
                    <li>A total of 6 hours and 15 minutes of class</li>
                    <li>Class will be live in Geneva.</li>
                    <li>For those who cannot joins, Online Class is on Facebook</li>
                    <li>You register, pay the fee and give us your Facebook contact.</li>
                    <li>You integrate the “Dancefloor Fusion Intensive Week” Facebook group.</li>
                    <li>You can follow the classes live or watch them later during 1 month on the group.</li>
                    <li>We will answer questions during the live class as well as later on messenger.</li>
                </ul>

                <div class="w-full md:w-48 my-10">
                    @auth
                    @if (!auth()->user()->isRegistered($course->id))
                    <form action="{{ route('registration.add', $course->id) }}" method="post">
                        @csrf
                        <button type="submit" id="register" title="Register"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Select course
                        </button>
                    </form>
                    @else
                    <div class="inline-flex">
                        <a href="{{ route('dashboard') }}"
                            class="mx-2 w-56 flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Dashboard
                        </a>
                        @if ($course->online_link)
                        <a href="{{ $course->online_link }}" target="_blank"
                            class="mx-2 w-56 flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            FB Group
                        </a>
                        @endif
                    </div>
                    @endif

                    @else
                    <a href="{{ route('login') }}"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Sign-in
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>




<div class="flex justify-center py-20">
    <div class="md:rounded-full overflow-hidden">
        <iframe
            src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDancefloorGeneva%2Fvideos%2F2250602018507552%2F&show_text=0&width=476"
            width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowTransparency="true" allowFullScreen="true"></iframe>
    </div>
</div>

<div class="flex justify-center mb-20">
    @auth
    @if (!auth()->user()->isRegistered($course->id))
    <form action="{{ route('registration.add', $course->id) }}" method="post">
        @csrf
        <button type="submit" id="register" title="Register"
            class="w-48 flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
            Select course
        </button>
    </form>
    @else
    <a href="{{ route('dashboard') }}"
        class="mx-2 w-48 flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
        Dashboard
    </a>
    @if ($course->online_link)
    <a href="{{ $course->online_link }}" target="_blank"
        class="mx-2 w-48 flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
        FB Group
    </a>
    @endif
    @endif

    @else
    <a href="{{ route('register') }}"
        class="w-48 flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
        Register
    </a>
    @endauth
</div>


@can('crud-courses')
<div class="container mx-auto">
    <h3 class="mb-6 text-3xl font-bold text-gray-700">Registered students</h3>
    <ul class="border rounded-lg">
        <li class="py-3 px-4 bg-gray-200 border-b text-xs uppercase text-gray-700 font-semibold">
            <div class="grid grid-cols-4 gap-5">
                <div>Full name</div>
                <div>Email</div>
                <div>Facebook</div>
                <div class="text-right">
                    Status
                </div>
            </div>
        </li>
        @forelse ($course->students as $student)
        <li class="py-3 px-4 {{ $loop->last ? '' : 'border-b' }} hover:bg-gray-200">
            <a href="{{ route('users.show', $student->id) }}">
                <div class="grid grid-cols-4 gap-5 text-gray-700">
                    <div>{{ $student->firstname }} {{ $student->lastname }}</div>
                    <div>{{ $student->email }}</div>
                    <div>{{ $student->facebook }}</div>
                    <div class="text-right">
                        <x-registration-status uid="{{ $student->id }}" cid="{{ $course->id }}" />
                    </div>
                </div>
            </a>
        </li>
        @empty
        <li>No students have registered yet!</li>
        @endforelse
    </ul>
</div>
@endcan



@endsection