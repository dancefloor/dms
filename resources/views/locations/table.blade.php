{{-- https://codepen.io/brbcoding-the-selector/pen/dyPeMOX?editors=1010  --}}

{{-- Filters --}}
<div class="bg-white px-4 border-b border-gray-200 sm:px-6">
    <div class="pt-3 pb-4 sm:p-0">
        <div class="sm:hidden">
            <select
                class="form-select block w-full text-gray-900 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150">
                <option>All</option>
                <option>Geneva</option>
                <option>Lausanne</option>
                <option>Export</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div>
                <nav class="-mb-px flex justify-between">
                    <div class="py-4">
                        <a href="{{ route('locations.index')}}"
                            class="whitespace-no-wrap py-5 px-1 border-b-2 border-transparent font-medium text-sm leading-5 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150 {{ request()->get('family') == '' ? 'border-red-700 text-red-700 font-bold focus:text-red-800 focus:border-red-700 hover:text-red-800 hover:border-red-800' : 'text-gray-500' }}">
                            All
                        </a>
                        <a href="{{ route('locations.index', ['family' => 'cuban-salsa']) }}"
                            class="whitespace-no-wrap ml-8 py-5 px-1 border-b-2 border-transparent font-medium text-sm leading-5 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150 {{ request()->get('family') == 'cuban-salsa' ? 'border-red-700 text-red-700 font-bold focus:text-red-800 focus:border-red-700 hover:text-red-800 hover:border-red-800' : 'text-gray-500' }}">
                            Geneva
                        </a>
                        <a href="{{ route('locations.index', ['family' => 'line-salsa']) }}"
                            class="whitespace-no-wrap ml-8 py-5 px-1 border-b-2 border-transparent font-medium text-sm leading-5 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150 {{ request()->get('family') == 'line-salsa' ? 'border-red-700 text-red-700 font-bold focus:text-red-800 focus:border-red-700 hover:text-red-800 hover:border-red-800' : 'text-gray-500' }}">
                            Lausanne
                        </a>
                    </div>
                    <div>
                        <a href=""
                            class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150 float-right self-end">
                            Export
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>



{{-- Seach field  --}}
<div class="px-4 pt-5 pb-3 sm:px-6">
    @include('partials.searchform',['model' => 'locations'])
</div>


{{-- List of students --}}
<ul class="mt-2">
    @forelse ($locations as $item)
    <li class="border-t border-gray-200 hover:bg-gray-200">
        <div class="flex items-center px-4 py-4 sm:px-6">
            <div class="min-w-0 flex-1 flex items-center">
                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-3 md:gap-4 items-center">
                    <div>
                        <a href="{{ route('locations.show', $item) }}"
                            class="block focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">
                            <div class="text-sm leading-5 font-medium text-gray-700 truncate uppercase">
                                {{ $item->name }}
                            </div>
                            <div class="flex items-center text-sm leading-5 text-gray-500">
                                {{ $item->neighborhood }}
                            </div>
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="flex">
                            {{ $item->city }}, {{ $item->country }}
                        </div>
                    </div>

                    <div class="text-gray-700">
                        {{ $item->contact }}
                    </div>
                </div>
            </div>
            <div>


                <div class="text-right relative" x-data="{ 'isHamburgerOpen': false }">
                    <button type="button" title="Open the actions menu" class="font-mono text-2xl px-2 text-gray-600"
                        @click="isHamburgerOpen = true" :class="{ 'bg-gray-100': isHamburgerOpen }">
                        &ctdot;
                    </button>

                    <ul x-show="isHamburgerOpen" x-cloak @click.away="isHamburgerOpen = false"
                        class="absolute border bg-white shadow-md text-left -mt-10 -ml-12 z-20 w-24">
                        <li class="p-2 hover:bg-gray-200">
                            <a href="{{ route('locations.show', $item) }}">Show</a>
                        </li>
                        <li class="p-2 hover:bg-gray-200">
                            <a href="{{ route('locations.edit', $item) }}">Edit</a>
                        </li>
                        <li class="p-2 hover:bg-gray-200">
                            <form action="{{ route('locations.destroy', $item) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type=" submit" onclick="return confirm_delete()">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </li>
    @empty
    <li>
        <div class="flex justify-center py-10 text-gray-700">
            There are no courses availables currently
        </div>
    </li>
    @endforelse
</ul>

{{-- Pagination --}}
<div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
    {{ $locations->links() }}
</div>

<script type="text/javascript">
    function confirm_delete() { return confirm('are you sure you want to delete this location?'); }
</script>