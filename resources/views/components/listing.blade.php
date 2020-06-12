@extends('layouts.back')

@section('content')
<section>
    <div class="bg-red-800 pt-10 pb-24 border-t border-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex justify-between mb-8 items-center">
                <div>
                    <h1
                        class="text-2xl font-bold leading-7 text-white md:text-4xl sm:leading-9 sm:truncate inline-flex">
                        {{ $icon }}
                        <span class="self-center ml-3">{{ $title }}</span>
                    </h1>
                    <span class="block">{{ $stats }}</span>
                </div>
                <div>
                    <a href="{{ route( $add ) }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-full text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red focus:border-red-600 transition duration-150 ease-in-out">
                        @include('icons.add')
                        <span class="ml-2">Add {{ $model }}</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="container mx-auto -mt-24 px-4">
        <div class="bg-white rounded-lg py-3 shadow mb-20">
            {{ $slot }}
        </div>
    </div>

</section>
@endsection