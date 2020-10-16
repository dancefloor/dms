@extends('layouts.back')

@section('content')

<section id="profile" class="container mx-auto">
    <h1 class="capitalize mb-10 font-bold text-2xl">Welcome {{ auth()->user()->firstname}},</h1>
    <section>
        <header class="flex justify-between items-baseline">
            <h2 class="uppercase text-sm font-semibold text-gray-600 mb-3">My courses</h2>

            @if (auth()->user()->pendingCourses()->count() > 0)
            <div class="mb-3">
                <a href="{{ route('checkout') }}"
                    class="bg-red-700 text-white py-2 px-3 hover:bg-red-800 rounded-full">Buy</a>
            </div>
            @endif

        </header>

        <ul class="border bg-white rounded-lg">
            @forelse (auth()->user()->learns as $item)
            <li
                class="grid grid-cols-3 sm:grid-cols-5 gap-4 items-center px-3 py-2 {{ $loop->last ? '' : 'border-b border-gray-300'}}">
                <div>
                    <strong class="block"><a href="{{ route('courses.show', $item) }}">{{ $item->name }}</a></strong>
                    @if ($item->start_date)
                    <span class="text-sm text-gray-700">{{ $item->start_date->format('d F y') }} -
                        {{ $item->end_date->format('d F y') }}</span>
                    @endif
                    <div class="text-xs sm:hidden capitalize">
                        {{ implode(',',$item->days)}}
                    </div>
                </div>
                <div class="hidden sm:inline-flex">
                    {{ implode(',',$item->days)}}
                </div>
                <div class="hidden sm:inline-flex">
                    @foreach ($item->teachers as $t)
                    <img src="{{ asset($t->avatar)}}" alt="" class="w-8 h-8 rounded-full">
                    @endforeach
                </div>
                <div class="flex justify-end">
                    <div class="inline-flex items-center">
                        <x-registration-status uid="{{ auth()->user()->id }}" cid="{{ $item->id }}" />
                    </div>
                </div>
                <div class="capitalize text-right">
                    @if ($item->pivot->status === 'registered')
                    <a href="{{$item->online_link}}">FB Group</a>
                    @endif
                    @if ($item->pivot->status === 'pre-registered')
                    <form action="{{ route('registration.remove', $item)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                    @endif
                </div>
            </li>

            @empty
            <li class="py-10">
                <dt class="text-center">You have not signed to any class yet</dt>
                <dd class="text-center my-3">
                    <a href="/" class="bg-red-700 text-white px-3 py-2 rounded-full capitalize hover:bg-red-800">Find
                        courses</a>
                </dd>
            </li>
            @endforelse
        </ul>
    </section>

</section>

@endsection