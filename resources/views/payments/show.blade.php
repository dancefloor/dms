@extends('layouts.back')

@section('content')
<section class="container mx-auto my-10">
    <h1 class="text-3xl mb-3">Payment</h1>
    <div class="border rounded-lg">
        <table class="w-full">
            <tr>
                <td class="font-bold px-3 py-3">Payment ID</td>
                <td>{{ $payment->id}}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-3">Order ID</td>
                <td>{{ $payment->order->id }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3">Amount</td>
                <td>{{ $payment->amount  }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3">Amount Received</td>
                <td>{{ $payment->amount_received  }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3">Received Date</td>
                <td>{{ $payment->received_date  }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-3">Method</td>
                <td>{{ $payment->method }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3">Code</td>
                <td>{{ $payment->code }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-3">Comments</td>
                <td>{{ $payment->comments }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3">Created at</td>
                <td>{{ $payment->created_at }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-3">Updated at</td>
                <td>{{ $payment->updated_at }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3">status</td>
                <td>{{ $payment->status }}</td>
            </tr>
        </table>
    </div>
    <a href="{{ route('payments.index') }}" class="inline-flex bg-gray-400 py-2 px-4 rounded-lg my-2">
        @include('icons.chevron-left', ['style' => 'w-3'])
        <span class="ml-2">Back</span>
    </a>
</section>

{{ json_decode($mollie) }}
@json($mollie)

@endsection