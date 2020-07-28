@extends('layouts.back')

@section('content')
<section id="payments" class="container mx-auto my-10">
    <h1 class="pull-left">Payments</h1>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
            href="{{ route('payments.create') }}">Add New</a>
    </h1>
    <br>
    <div class="content">
        @include('payments.table')
    </div>
</section>
@endsection