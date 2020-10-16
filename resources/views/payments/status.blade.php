@extends('layouts.back')

@section('content')

<div class="container mx-auto pt-10 pb-20">
    <h1 class="text-3xl text-green-700 font-bold">Payment Success</h1>

    <p class="my-5">
        You have successfully register in this courses
    </p>

    <div class="bg-red-200 py-2 px-3 rounded-md">
        <p class="my-5 font-bold text-red-800">
            Please click my dashboard to access the facebook group
        </p>
    </div>
    <br>

    <a href="{{ route('dashboard') }}" class="bg-red-700 hover:bg-red-800 py-2 px-3 rounded-full text-white ">My
        dashboard</a>
</div>

@endsection