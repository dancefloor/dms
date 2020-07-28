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

            @empty($orders)
            <thead class="bg-gray-200 border-b">
                <tr>
                    <th>Order #</th>
                    <th>User</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            @endempty

            @forelse ($orders as $item)
            <tr class="border-b">
                <td class="border-r">{{ $item->id }}</td>
                <td class="border-r">{{ $item->user->firstname }}</td>
                <td class="border-r">{{ $item->created_at->format('d.m.yy') }}</td>
                <td class="flex justify-end">
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