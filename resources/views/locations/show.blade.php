@extends('layouts.back')

@section('content')

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $location->name }} Details and information.
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Updated at: {{ $location->updated_at->format('F d, Y') }}
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Name
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->name }}</p>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Slug
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $location->slug }}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Shortname
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $location->shortname }}
                </dd>
            </div>

            <div class="bg-gray-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Address
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->address }}</p>
                    <span class="text-gray-700">{{ $location->address_info }}</span>
                    <p>{{ $location->postal_code }}, {{ $location->city }} ({{ $location->neighborhood }})</p>
                    <p>{{ $location->state }}, {{ $location->country }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Comments
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->comments }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Contact person
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->contact }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Email
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->email }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    phone
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->phone }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Video
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{!! $location->video !!}</p>
                </dd>
            </div>

            <div class=" bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Google Maps
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{!! $location->google_maps !!}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Google maps shortlink
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>
                        <a href="{{ $location->google_maps_shortlink }}" target="_blank" rel="noopener noreferrer"
                            class="hover:underline">
                            {{ $location->google_maps_shortlink }}
                        </a>
                    </p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Public Transportation
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->public_transportation }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Entry Code
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->entry_code }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Contract
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @if ($location->contract)
                    <a href="{{ asset('uploads/'. $location->contract) }}">Download</a>
                    @endif
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Created at
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $location->created_at }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Classrooms
                </dt>

                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <ul class="border border-gray-200 rounded-md">
                        @forelse ($location->classrooms as $item)
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
                        @endforelse

                    </ul>
                </dd>
            </div>
        </dl>
    </div>
</div>

<div class="flex justify-between mt-5 mb-10">
    <a href="{{ route('locations.edit', $location) }}" class="df-btn-secondary">
        @include('icons.pen')
        <span class="ml-2">Edit Location</span>
    </a>
    <form action="{{ route('locations.destroy', $location) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="df-btn-primary">
            @include('icons.trash', ['style' => 'h-5 w-5'])
            <span class="ml-2">Delete</span>
        </button>
    </form>
</div>
@endsection