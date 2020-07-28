@extends('layouts.back')

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-gray-800 font-bold text-4xl mb-5">
        Orders
    </h1>

    <div>
        <a href="{{ route('orders.create') }}" class="bg-red-700 hover:bg-red-800 text-gray-100 py-2 px-4 rounded-full">
            Add Order
        </a>
    </div>

    <br>
    <div class="border rounded-lg">
        <table class="w-full">

            @if ($orders->isNotEmpty())
            <thead class="bg-gray-200 border-b">
                <tr>
                    <th class="text-left px-3">Order #</th>
                    <th class="text-left px-3">User</th>
                    <th class="text-left px-3">Date</th>
                    <th class="text-left px-3">Total</th>
                    <th class="text-left px-3">Method</th>
                    <th class="text-left px-3">Status</th>
                    <th></th>
                </tr>
            </thead>
            @endif

            @forelse ($orders as $item)
            <tr class="border-b">
                <td class="border-r py-1 px-3">{{ $item->id }}</td>
                <td class="border-r py-1 px-3">{{ $item->user->firstname }}</td>
                <td class="border-r py-1 px-3">{{ $item->created_at->format('d.m.yy') }}</td>
                <td class="border-r py-1 px-3 text-right"> CHF {{ $item->total }}</td>
                <td class="border-r py-1 px-3">{{ $item->method }}</td>
                <td class="border-r py-1 px-3">{{ $item->status }}</td>
                <td class="flex justify-end pr-3">
                    <a href="{{ route('orders.show', $item)}}" class="hover:underline mr-2">Show</a>
                    <form action="{{ route('orders.destroy', $item) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <div class="flex justify-center py-5">
                No current orders
            </div>
            @endforelse
        </table>
    </div>
</div>
@endsection