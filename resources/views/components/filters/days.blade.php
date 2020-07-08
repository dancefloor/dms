<div>
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
                        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray100 focus:text-gray-900"
                        role="menuitem">
                        Monday
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
</div>