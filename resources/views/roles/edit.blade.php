@extends('layouts.back')

@section('content')
<div class="container mx-auto">
    <header class="pt-10 mx-10">
        <h1 class="text-2xl font-bold leading-7 sm:text-3xl sm:leading-9 sm:truncate text-gray-700">Edit Role</h1>
    </header>
    <section id="role-form" class="pt-t">
        <form action="{{ route('roles.update', $role) }}" method="post" class="df-form">
            @csrf
            @method('put')
            <div class="mb-6">
                <label for="name" class="text-gray-700 font-semibold uppercase text-xs px-3">Role name</label>
                <div class="w-full md:w-1/2">
                    <input type="text" name="name" id="name" value="{{ $role->name }}">
                </div>
            </div>
            <div class="mb-6">
                <label for="label" class="text-gray-700 font-semibold uppercase text-xs px-3">Label</label>
                <input type="text" name="label" id="label" value="{{ $role->label }}">
            </div>

            <div class="w-full md:w-1/2 mb-6 mx-3">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-700" for="permissions">
                    Permissions
                </label>
                @foreach ($permissions as $p)
                <div>
                    <input type="checkbox" name="permissions[]" id="permissions" class="mr-2 leading-tight"
                        value="{{ $p->id }}" {{ $role->hasPermission($p->id) ? 'checked' : ''}}>
                    <span class="text-sm text-gray-700">
                        {{ $p->name }}
                    </span>
                </div>
                @endforeach
            </div>

            <button type="submit" class="bg-red-700 px-4 py-2 rounded-full hover:bg-red-800 text-white mx-3">Update
                role</button>
        </form>
    </section>
</div>

@endsection