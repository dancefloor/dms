{{-- Filters --}}
<div class="bg-white px-4 border-b border-gray-200 sm:px-6">
    <div class="pt-3 pb-4 sm:p-0">
        <div class="sm:hidden">
            <select
                class="form-select block w-full text-gray-900 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150">
                <option>All</option>
                <option>Teachers</option>
                <option selected="">Active</option>
                <option>Passive</option>
                <option>Students with debts</option>
                <option>Assistants</option>
                <option>Men</option>
                <option>Women</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div>
                <nav class="-mb-px flex">
                    <a href="{{ route('users.index') }}"
                        class="whitespace-no-wrap py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        All
                    </a>
                    {{-- <a href="{{ route('users.teachers') }}"
                    class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5
                    text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700
                    focus:border-gray-300 transition ease-in-out duration-150">
                    Teachers
                    </a>
                    <a href="{{ route('users.actives')}}"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-red-500 font-medium text-sm leading-5 text-red-600 focus:outline-none focus:text-red-800 focus:border-red-700 transition ease-in-out duration-150">
                        Active Students
                    </a>
                    <a href="{{ route('users.passive')}}"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Passive Students
                    </a>
                    <a href="{{ route('users.debtors')}}"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Students with debts
                    </a>
                    <a href="{{ route('users.assistants')}}"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Assistants
                    </a>--}}
                    <a href="{{ route('users.male') }}"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Men
                    </a>
                    <a href="{{ route('users.females')}}" class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5
                    text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700
                    focus:border-gray-300 transition ease-in-out duration-150">
                        Women
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- Seach field  --}}
<div class="px-4 pt-5 pb-3 sm:px-6">
    <div>
        <label for="filter" class="sr-only">Search candidates</label>
        <div class="flex rounded-md shadow-sm">
            <div class="relative flex-grow focus-within:z-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input id="filter"
                    class="appearance-none rounded-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-l-md text-gray-900 placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 transition ease-in-out duration-150"
                    placeholder="John Doe">
            </div>
            <button
                class="-ml-px relative flex items-center px-3 py-2 rounded-r-md border border-gray-300 text-sm leading-5 bg-gray-200 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="ml-2">Filter</span>
            </button>
        </div>
    </div>
</div>


<ul>
    @forelse ($users as $user)
    <li>
        <a href="{{ route('users.show', $user->id) }}"
            class="block hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">
            <div class="flex items-center px-4 py-4 sm:px-6">
                <div class="min-w-0 flex-1 flex items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset($user->avatar)}}" alt="{{ $user->firstname }} {{ $user->lastname }}"
                            class="h-12 w-12 rounded-full">
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                        <div>
                            <div class="text-sm leading-5 font-medium text-red-800 truncate">
                                {{ $user->firstname }} {{ $user->lastname }}
                            </div>
                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="truncate">{{ $user->email }}</span>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div>
                                <div class="text-sm leading-5 text-gray-900">
                                    Registered
                                    <time
                                        datetime="{{ $user->created_at }}">{{ $user->created_at->diffforhumans()}}</time>
                                </div>
                                <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    All courses paid
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </a>
    </li>
    @empty

    @endforelse
</ul>


{{-- Pagination --}}

<div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
    <div class="hidden sm:block">
        <p class="text-sm leading-5 text-gray-700">
            Showing
            <span class="font-medium">1</span>
            to
            <span class="font-medium">10</span>
            of
            <span class="font-medium">20</span>
            results
        </p>
    </div>
    <div class="flex-1 flex justify-between sm:justify-end">
        <a href="#"
            class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            Previous
        </a>
        <a href="#"
            class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            Next
        </a>
    </div>
</div>