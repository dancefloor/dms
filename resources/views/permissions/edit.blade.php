@extends('layouts.back')

@section('content')
<div class="container mx-auto">
    <header class="pt-10 mx-10">
        <h1 class="text-2xl font-bold leading-7 sm:text-3xl sm:leading-9 sm:truncate text-gray-700">Edit Permission</h1>
    </header>
    <section id="role-form" class="pt-t">
        <form action="{{ route('permissions.update', $permission->id) }}" method="post" class="df-form">
            @csrf
            @method('PATCH')
            <div class="mb-6">
                <label for="name" class="text-gray-700 font-semibold uppercase text-xs px-3">Permission name</label>
                <div class="w-full md:w-1/2">
                    <input type="text" name="name" id="name" value="{{ $permission->name }}">
                </div>
            </div>
            <div class="mb-6">
                <label for="label" class="text-gray-700 font-semibold uppercase text-xs px-3">Label</label>
                <input type="text" name="label" id="label" value="{{ $permission->label }}">
            </div>

            <div class="w-full md:w-1/2 mb-6 mx-3">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-700" for="permissions">
                    Roles
                </label>
                @foreach ($roles as $r)
                <div>
                    <input type="checkbox" name="roles[]" id="roles" class="mr-2 leading-tight" value="{{ $r->id }}"
                        {{ $permission->hasRole($r->id) ? 'checked' : ''}}>
                    <span class="text-sm text-gray-700">
                        {{ $r->name }}
                    </span>
                </div>
                @endforeach
            </div>

            <button type="submit" class="bg-red-700 px-4 py-2 rounded-full hover:bg-red-800 text-white mx-3">
                Edit permission
            </button>
        </form>
    </section>
</div>

@endsection