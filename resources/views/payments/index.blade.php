@extends('layouts.back')

@section('content')
<section id="payments" class="container mx-auto my-10">
    <h1 class="text-3xl mb-3">Payments</h1>

    <a class="bg-red-700 text-white rounded-full hover:bg-red-800 py-1 px-4 my-5 inline-block"
        style="margin-top: -10px;margin-bottom: 5px" href="{{ route('payments.create') }}">Add New</a>

    <br>
    <a href="{{ route('payments-raw.export') }}">Raw Export</a>
    <a href="{{ route('payments.export') }}">Export</a>
    <div class="my-5 border rounded-lg">
        @include('payments.table')
    </div>
</section>
@endsection