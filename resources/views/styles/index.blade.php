@extends('layouts.back')

@section('content')
@include('flash::message')
<x-listing title="Styles" add="styles.create" model="Style">
    <x-slot name="icon">
        @include('icons.music-genre', ['style'=>'w-10 h-10'])
    </x-slot>
    {{-- <x-slot name="stats">
        <span class="text-sm text-gray-600">{{ $styles->count() }} Total</span>
    </x-slot> --}}
    <main>
        @include('styles.table')
    </main>
</x-listing>

@endsection