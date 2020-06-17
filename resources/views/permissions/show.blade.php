@extends('layouts.back')

@section('content')

<div class="flex justify-center">
    <div class="max-w-xl w-1/3 py-10">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Permission Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    Permission details and associated roles .
                </p>
            </div>
            <div>
                <dl>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Name
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $permission->name }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Slug
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $permission->slug }}
                        </dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $permission->label }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Roles
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">

                            <ul class="border border-gray-200 rounded-md">
                                @forelse ($permission->roles as $role)
                                <li
                                    class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5 {{ $loop->last ? '':'border-b border-gray-200'}}">
                                    <div class="w-0 flex-1 flex items-center text-gray-700">
                                        @include('icons.user-access')
                                        <span class="ml-2 flex-1 w-0 truncate">
                                            {{ $role->name }}
                                        </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="{{ route('roles.show', $role) }}"
                                            class="font-medium text-red-700 hover:text-red-800 transition duration-150 ease-in-out">
                                            View
                                        </a>
                                    </div>
                                </li>
                                @empty
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                    There are no roles attached to this permission
                                </li>
                                @endforelse
                            </ul>

                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="flex justify-between my-5">
            <div>
                <a href="{{ route('roles.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 py-2 px-4 rounded-lg mr-2 inline-flex text-gray-800">
                    @include('icons.chevron-left', ['style' => 'w-4 mr-2'])
                    Back
                </a>
            </div>
            <div class="inline-flex">
                <a href="{{ route('permissions.edit', $permission) }}"
                    class="bg-gray-300 hover:bg-gray-400 py-2 px-4 rounded-lg mr-2">
                    Edit Role
                </a>
                <form action="{{ route('permissions.destroy', $permission) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-700 hover:bg-red-800 py-2 px-4 rounded-lg text-white">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection