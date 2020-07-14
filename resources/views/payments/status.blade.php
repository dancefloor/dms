@extends('layouts.back')

@section('content')

<div class="container mx-auto pt-10 pb-20">
    <h1 class="text-3xl text-green-700 font-bold">Payment Success</h1>

    <p class="my-5">
        You have successfully register in this courses
    </p>

    <p class="my-5">
        We are having technial issues, your paiment status will be updaded within 24h. Sorry for the inconvenience
    </p>

    <a href="{{ route('dashboard') }}"
        class="bg-red-700 hover:bg-red-800 py-2 px-3 rounded-full text-white ">Dashboard</a>
</div>

@endsection