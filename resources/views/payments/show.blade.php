@extends('layouts.back')

@section('content')
<section class="container mx-auto my-10">
    <h1 class="text-3xl mb-3">Payment</h1>
    <div class="border rounded-lg">
        <table class="w-full">
            <tr>
                <td class="font-bold px-3 py-2">Payment ID</td>
                <td>{{ $payment->id}}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Order ID</td>
                <td>{{ $payment->order->id }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">Amount</td>
                <td>{{ $payment->amount  }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Method</td>
                <td>{{ $payment->method }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">Code</td>
                <td>{{ $payment->code }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Comments</td>
                <td>{{ $payment->comments }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">Created at</td>
                <td>{{ $payment->created_at }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Updated at</td>
                <td>{{ $payment->updated_at }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">status</td>
                <td>{{ $payment->status }}</td>
            </tr>
        </table>
    </div>
    <a href="{{ route('payments.index') }}" class="btn btn-default">Back</a>
</section>

@endsection