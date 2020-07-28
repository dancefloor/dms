@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md -mt-10">

    <div class="flex justify-center py-4">
        @include('icons.logo-white',['style'=>'h-16'])
    </div>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}"
        class="bg-white shadow-xl rounded-lg px-8 pt-6 pb-8 mb-4">
        @csrf

        <h1 class="text-center text-gray-700 text-lg font-bold mb-3">{{ __('Reset Password') }}</h1>

        <div class="mb-4">
            <input
                class="appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('email') border-red-500 @enderror"
                type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                autocomplete="email" autofocus>
            @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-4">
            <button type="submit" class="rounded-full bg-red-700 py-2 px-4 text-white hover:bg-red-800 w-full">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>

</div>
@endsection