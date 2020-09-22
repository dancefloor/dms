@extends('layouts.back')

@section('content')

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $style->name }} Details and information.
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Updated At: {{ $style->updated_at->format('F d, Y') }}
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Name
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $style->name }}</p>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Place of origin
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $style->origin }}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Year of origin
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $style->year }}
                </dd>
            </div>

            <div class="bg-gray-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Family
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $style->family }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Music
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $style->music }}</p>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Icon
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $style->icon }}</p>
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Color
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $style->color }}</p>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Image
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <img src="{{ asset('images/' . $style->image) }}" alt="{{ $style->name }}">
                    {{-- <p>source: {{ $style->image }}</p> --}}
                </dd>
            </div>



            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Description
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{ $style->description }}</p>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Courses
                </dt>

                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <ul class="border border-gray-200 rounded-md">
                        @forelse ($style->courses as $item)
                        <li
                            class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5 {{ $loop->last ? '' : 'border-b' }}">
                            <div class="w-0 flex-1 flex items-center">
                                <span class="ml-2 flex-1 w-0 truncate">
                                    {{ $item->name }}
                                </span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <a href="{{ route('courses.show', $item) }}"
                                    class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                    view
                                </a>
                            </div>
                        </li>

                        @empty
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex items-center">
                                <span class="ml-2 flex-1 w-0 truncate">
                                    There is no courses attached to this style
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

<div class="flex justify-between my-5">
    <a href="{{ route('styles.edit', $style) }}" class="df-btn-secondary">
        @include('icons.pen', ['style'=> 'h-4 w-4'])
        <span class="ml-2">Edit style</span>
    </a>
    <form action="{{ route('styles.destroy', $style) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="df-btn-primary">
            @include('icons.trash', ['style' => 'h-5 w-5'])
            <span class="ml-2">Delete</span>
        </button>
    </form>
</div>

@endsection