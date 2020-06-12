@extends('layouts.back')

@section('content')

<section id="profile" class="container mx-auto py-10">
    <h1 class="capitalize mb-10 font-bold text-2xl">Welcome {{ auth()->user()->firstname}},</h1>
    <section>
        <header class="flex justify-between items-baseline">
            <h2 class="uppercase text-sm font-semibold text-gray-600 mb-3">My courses</h2>
            @if (auth()->user()->pendingCourses()->count())
            <div class="mb-3">
                <a href="{{ route('checkout') }}"
                    class="bg-red-700 text-white py-2 px-3 hover:bg-red-800 rounded-full">Proceed to
                    Checkout</a>
            </div>
            @endif
        </header>

        <dl class="border bg-white rounded-lg">
            @forelse (auth()->user()->learns as $item)
            <div class="px-3 py-2 {{ $loop->last ? '' : 'border-b border-gray-300'}}">
                <dt class="flex justify-between">
                    <a href="">{{ $item->name }}</a>
                    <div class="inline-flex items-center">
                        @switch($item->pivot->status)
                        @case('pending')
                        @include('icons.add')
                        @break
                        @case(2)
                        @include('icons.add')
                        @break
                        @default
                        @include('icons.x')
                        @endswitch
                        <span class="ml-2">{{ $item->pivot->status }}</span>
                    </div>
                </dt>
                <dd class="capitalize">
                    {{ $item->start_date->format('d F y') }} - {{ $item->end_date->format('d F y') }}
                    {{ implode(',',$item->days)}}
                </dd>
            </div>

            @empty
            <dt class="text-center">You have not signed to any class yet</dt>
            <dd class="text-center my-3">
                <a href="" class="bg-red-700 text-white px-3 py-2 rounded-full capitalize hover:bg-red-800">Find
                    courses</a>
            </dd>
            @endforelse
        </dl>
    </section>


    <br>


    <section>
        <h2>Paiements</h2>
    </section>
</section>

@endsection