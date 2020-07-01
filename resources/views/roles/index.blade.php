@extends('layouts.back')

@section('content')
<x-listing title="Roles" add="roles.create" model="Role">
    <x-slot name="icon">
        @include('icons.user-access', ['style'=>'w-12 h-12'])
    </x-slot>
    <x-slot name="stats">
    </x-slot>
    <main>
        @include('roles.list')
        <br>
    </main>
</x-listing>
<br>
<br>
@include('permissions.index')

@endsection