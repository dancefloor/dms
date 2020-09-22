<section class="container mx-auto px-3">
    <div class="flex justify-between mb-8 items-center">
        <div>
            <h1 class="text-2xl font-bold leading-7 text-gray-900 md:text-4xl sm:leading-9 sm:truncate inline-flex">
                {{ $icon }}
                <span class="self-center ml-3">{{ $title }}</span>
            </h1>
            {{-- <span class="block">{{ $stats }}</span> --}}
        </div>
        <div>
            <a href="{{ route( $add ) }}"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-full text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:shadow-outline-red focus:border-red-600 transition duration-150 ease-in-out">
                @include('icons.add')
                <span class="ml-2">Add {{ $model }}</span>
            </a>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow mb-20 overflow-hidden">
        {{ $slot }}
    </div>
</section>