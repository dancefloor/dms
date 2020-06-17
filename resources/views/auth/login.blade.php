@extends('layouts.auth')

@section('content')

<div class="w-full max-w-md">
    <div class="flex justify-center mb-5">
        @include('icons.logo-white', ['style' => 'h-16'])
    </div>
    <form class="bg-white shadow-xl rounded-lg px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="text-center text-gray-700 text-lg font-bold mb-3">{{ __('Login') }}</h1>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                {{ __('E-Mail Address') }}
            </label>
            <input
                class="appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('email') border-red-500 @enderror"
                id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required
                autocomplete="email" autofocus>
            @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                {{ __('Password') }}
            </label>
            <input
                class="appearance-none border  rounded-full w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none @error('password') border-red-500 @enderror"
                id="password" type="password" placeholder="********" name="password" required
                autocomplete="current-password">
            @error('password')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="text-gray-700 text-sm font-bold mb-2" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="flex items-center justify-between">
            <button
                class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-5 rounded-full focus:outline-none focus:shadow-outline"
                type="submit">
                {{ __('Login') }}
            </button>
            @if (Route::has('password.request'))
            <a class="inline-block align-baseline font-bold text-sm text-red-700 hover:text-red-900"
                href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Dancefloor. All rights reserved.
    </p>
</div>
@endsection