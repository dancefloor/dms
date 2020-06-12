<header class="bg-black md:flex md:justify-between" x-data="{ openMenu: true, openAccount: false }"
    @click.away="openAccount = false">
    <div class="flex items-center justify-between px-4 py-1">
        <div>
            <a href="{{ route('welcome') }}">@include('icons.logo-white', ['style'=>'h-12'])</a>
        </div>
        <div class="inline-flex">
            <button @click="openMenu = !openMenu" type="button"
                class="text-gray-400 focus:text-white focus:outline-none hover:text-white md:hidden">
                <svg class="h-6 w-6 fill-current" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': openMenu, 'inline-flex': !openMenu }" class="inline-flex"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': !openMenu, 'inline-flex': openMenu }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="relative pr-2 md:hidden">
                <button @click="openAccount = !openAccount" type="button"
                    class="block text-white w-8 h-8 rounded-full overflow-hidden border-2 border-gray-700 hover:border-white focus:outline-none focus:border-white">
                    <img class="w-full h-full object-cover" src="https://randomuser.me/api/portraits/men/75.jpg" alt="">
                </button>
                @include('layouts.account-dropdown')
            </div>
        </div>
    </div>
    <div class="inline-flex items-center">
        <div :class="{ 'block': openMenu, 'hidden':!openMenu }" class="px-2 pt-2 pb-4 hidden md:inline-flex">
            @auth
            <a href="{{ route('dashboard') }}"
                class="block text-white hover:bg-gray-800 rounded px-2 py-1 md:mt-1">Dashboard</a>
            @if (auth()->user()->isAdmin())
            <a href="{{ route('courses.index') }}"
                class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Courses</a>
            {{-- <a href="#" class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Locations</a> --}}
            <a href="{{ route('styles.index') }}"
                class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Styles</a>
            {{-- <a href="#" class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Skills</a> --}}
            <a href="{{ route('users.index') }}"
                class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Users</a>
            @endif

            <div class="relative pr-2 mt-1 hidden md:inline-block">
                <button @click="openAccount = !openAccount" type="button"
                    class="block text-white w-8 h-8 rounded-full overflow-hidden border-2 border-gray-700 hover:border-white focus:outline-none focus:border-white">
                    <img class="w-full h-full object-cover" src="{{ asset(auth()->user()->avatar) }}" alt="">
                </button>
                @include('layouts.account-dropdown')
            </div>
            @else
            <!-- Authentication Links -->
            <a href="{{ url('/login') }}" class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Login</a>
            <a href="{{ url('/register') }}"
                class="block text-white hover:bg-gray-800 rounded px-2 py-1 mt-1">Register</a>
            @endauth
        </div>

    </div>
</header>