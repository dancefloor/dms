@extends('layouts.back')

@section('content')

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $classroom->name }} Details and information.
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Updated at: {{ $classroom->updated_at->format('F d, Y') }}
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Name
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->name }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Slug
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $classroom->slug }}
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Squared meters
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $classroom->m2 }}
                </dd>
            </div>

            <div class="bg-gray-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Capacity
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->capacity }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Limit of couples
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->limit_couples }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Price per hour
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->price_hour }}</p>
                </dd>
            </div>


            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Price per month
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->price_month }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Dance shoes required
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->dance_shoes }}</p>
                </dd>
            </div>



            <div class=" bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Color
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->color }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Location
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>
                        <a href="{{ $classroom->location }}" target="_blank" rel="noopener noreferrer"
                            class="hover:underline">
                            {{ $classroom->location->name }}
                        </a>
                    </p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Comments
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $classroom->comments }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Classrooms
                </dt>

                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <ul class="border border-gray-200 rounded-md">
                        {{-- @forelse ($classroom->classrooms as $item)
                        <li
                            class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5 {{ $loop->last ? '' : 'border-b' }}">
                        <div class="w-0 flex-1 flex items-center">
                            <span class="ml-2 flex-1 w-0 truncate">
                                {{ $item->name }}
                            </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a href="{{ route('classrooms.show', $item) }}"
                                class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                view
                            </a>
                        </div>
                        </li>

                        @empty
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex items-center">
                                <span class="ml-2 flex-1 w-0 truncate">
                                    There is no classrooms attached to this style
                                </span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                            </div>
                        </li>
                        @endforelse --}}

                    </ul>
                </dd>
            </div>
        </dl>
    </div>
</div>

<div class="flex justify-between mt-5 mb-10">
    <a href="{{ route('classrooms.edit', $classroom) }}" class="df-btn-secondary">
        @include('icons.pen')
        <span class="ml-2">Edit classroom</span>
    </a>
    <form action="{{ route('classrooms.destroy', $classroom) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="df-btn-primary">
            @include('icons.trash', ['style' => 'h-5 w-5'])
            <span class="ml-2">Delete</span>
        </button>
    </form>
</div>
@endsection