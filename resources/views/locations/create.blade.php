@extends('layouts.back')

@section('content')

<section>
    <h1 class="mb-5">Add Location</h1>
    <div class="border rounded-lg py-5 bg-white px-3">
        <form action="{{ route('locations.store') }}" class="df-form" enctype="multipart/form-data" method="POST">
            @csrf
            @include('locations.form')
            <!-- Submit Field -->
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/12 px-3"></div>
                <div class="w-full md:w-11/12 px-4">
                    <div class="flex items-center">
                        <button type="submit"
                            class="inline-flex items-center bg-red-700 text-white hover:bg-red-800 py-2 px-4 rounded-lg mr-2">
                            @include('icons.add')
                            <span class="ml-2">Add Location</span>
                        </button>
                        <a href="{{ route('locations.index') }}"
                            class="inline-flex py-2 px-4 bg-gray-300 items-center rounded-lg hover:bg-gray-500 ml-1">
                            @include('icons.x', ['style'=>'w-3'])
                            <span class="ml-2">Cancel</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>

@endsection