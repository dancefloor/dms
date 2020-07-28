<div id="days">
    <div class="relative">
        <select
            class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 h-10 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="aware_of_df" name="aware_of_df" required>
            <option disabled selected>Select Day</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="thursday">thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
</div>


{{-- <div>
    <div class="relative inline-block text-left" x-data="{open: false}">
        <div>
            <span class="rounded-md shadow-sm block w-64">
                <button @click="open=!open" @click.away="open = false" type="button"
                    class="inline-flex justify-center block w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-red-200 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
                    id="options-menu" aria-haspopup="true" aria-expanded="true">
                    Days of week
                    <svg class="-mr-1 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </span>
        </div>

        <div x-show="open" class="origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg">
            <div class="rounded-md bg-white shadow-xs">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    <a href="{{ route('welcome', [ 'dow'=> 'monday' ])}}"
class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none
focus:bg-gray100 focus:text-gray-900"
role="menuitem">
Mondayssss
</a>
<a href="{{ route('welcome', [ 'dow'=> 'tuesday' ])}}"
    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
    role="menuitem">
    Tuesday
</a>
<a href="{{ route('welcome', [ 'dow'=> 'wednesday' ])}}"
    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
    role="menuitem">
    Wednesday
</a>
<a href="{{ route('welcome', [ 'dow'=> 'thursay' ])}}"
    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
    role="menuitem">
    Thursday
</a>
<a href="{{ route('welcome', [ 'dow'=> 'friday' ])}}"
    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
    role="menuitem">
    Friday
</a>
<a href="{{ route('welcome', [ 'dow'=> 'saturday' ])}}"
    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
    role="menuitem">
    Saturday
</a>
<a href="{{ route('welcome', [ 'dow'=> 'sunday' ])}}"
    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
    role="menuitem">
    Sunday
</a>
</div>
</div>
</div>
</div>
</div> --}}