@extends('layouts.back')

@section('content')
<div class="container mx-auto my-10">
    <div class="border rounded">
        <table class="w-full table-auto">
            <tr>
                <td class="font-bold px-3 py-2">Order Number</td>
                <td>{{ $order->id }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">User</td>
                <td>{{ $order->user->firstname }} {{ $order->user->lastname }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">Author</td>
                <td>{{ $order->author }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Method</td>
                <td>{{ $order->method }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">Subtotal</td>
                <td>{{ $order->subtotal}}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Discount</td>
                <td>{{ $order->discount}}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">VAT</td>
                <td>{{ $order->vat }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Total</td>
                <td>{{ $order->total}}</td>
            </tr>
            <tr>
                <td valign="top" class="font-bold px-3 py-2">Registrations</td>
                <td>
                    <ul class="list-disc pl-5">
                        @foreach ($order->registrations as $item)
                        <li>{{ $item->course->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Status</td>
                <td>{{ $order->status }}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-2">Comments</td>
                <td>{{ $order->comments }}</td>
            </tr>
            <tr class="bg-white">
                <td class="font-bold px-3 py-2">Payments</td>
                <td>
                    <ul>
                        @foreach ($order->payments as $item)
                        <li>Payment ID:{{ $item->id }} (CHF {{ $item->amount}})</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <a href="{{ route('orders.index') }}" class="my-5 block hover:underline">Back</a>
</div>
@endsection