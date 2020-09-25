@extends('layouts.back')

@section('content')
<div class="container">
    <h1>{{ __('Verify Your Email Address') }}</h1>
    <br>
    <p>@if (session('resent'))
        <div class="bg-green-300 py-4 mb-10 rounded-lg text-green-800 px-5" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        Sometimes emails could take up to 5 minutes to arrive.
        {{ __('If you did not receive the email') }}, please check your spams or make another request.
        <br>
        <br>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="text-white rounded-full bg-red-700 hover:bg-red-800 hover:text-red-100 px-4 py-2">{{ __('click here to request another') }}</button>
        </form>
    </p>
</div>
@endsection