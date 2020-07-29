<div>

    {{-- <section id="filters">
        <form action="{{ route('welcome') }}" class="flex flex-wrap -mx-3 mb-2 items-center">
    <div class="px-3 my-1">
        <a href="{{ route('welcome') }}"
            class="inline-flex justify-center w-24 bg-white border rounded-lg px-4 py-2 text-sm leading-5 font-medium text-gray-600 hover:text-gray-500 focus:outline-none focus:border-red-200 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
            @include('icons.all', ['style'=>'w-4 mr-2'])
            All
        </a>
    </div>
    <div id="days" class="px-3 my-1">
        <x-filters.days />
    </div>
    <div id="styles" class="px-3 my-1">
        <x-filters.styles />
    </div>
    <div id="level" class="px-3 my-1">
        <x-filters.level />
    </div>
    <div id="filter-button">
        <button type="submit"
            class="border h-10 rounded-lg px-4 bg-white text-gray-600 inline-flex items-center hover:bg-gray-700 hover:text-gray-100">
            @include('icons.filter')
            <span class="ml-2">Filter</span>
        </button>
    </div>
    </form>
    </section> --}}

    <div class="flex flex-wrap">
        @forelse ($courses as $course)
        <div class="w-full md:w-1/4">
            @auth
            <x-course-card :course="$course" :user="Auth()->user()" />
            @else
            <x-course-card :course="$course" />
            @endauth
        </div>
        @empty
        No courses available
        @endforelse
    </div>
</div>