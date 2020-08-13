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
            Dancing makes us happy! and we are committed to keep sharing our passion for dancing no matter
            what. Please
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

{{-- {{ env('APP_URL').'/storage' }}
<br>
{{ base_path('public/paypal.png') }} --}}

{{-- // 'root' =>  --}}


<div class="container mx-auto my-20">
    <x-catalogue :courses="$courses" />
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