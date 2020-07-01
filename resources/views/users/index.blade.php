@extends('layouts.back')

@section('content')
<x-listing title="Users" add="users.create" model="User">
    <x-slot name="icon">
        @include('icons.users', ['style'=>'w-16 h-16'])
    </x-slot>
    <x-slot name="stats">
        <span class="text-sm text-gray-500">400 Total</span>
        <span class="text-sm text-gray-500 px-3">15 Teachers</span>
        <span class="text-sm text-gray-500 px-3">300 Active</span>
        <span class="text-sm text-gray-500 px-3">85 Passive</span>
    </x-slot>
    <main>
        @include('users.table')
    </main>
</x-listing>
@endsection