@extends('layouts.front')

@section('content')



<div class="container mx-auto my-10">
    <header class="text-2xl mb-5">
        checkout
    </header>
    <section>
        <ul>
            @php $total = 0; @endphp
            @foreach (auth()->user()->pendingCourses as $item)
            <li class="border-b flex justify-between">
                <span>{{ $item->name }}</span>
                <span>{{ $item->full_price }}</span>
                @php $total = $total + $item->full_price; @endphp
            </li>
            @endforeach
        </ul>
        <div class="flex justify-between">
            <span>Total price: </span>
            <span class="font-bold">{{ $total }}</span>
        </div>
        <div class="my-5">
            <a href="{{ route('mollie.payment', ['amount' => $total ])}}"
                class="bg-red-700 text-white px-3 py-2 rounded-full">Pay now</a>
        </div>
    </section>
</div>
@endsection