<nav class="bg-gray-900" x-data="{ openMenu: false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button @click="openMenu = !openMenu"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                    aria-label="Main menu" aria-expanded="false">
                    <!-- Icon when menu is closed. -->
                    <svg :class="{ 'block': !openMenu, 'hidden':openMenu }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg :class="{ 'block': openMenu, 'hidden':!openMenu }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0">
                    <a href="/">
                        @include('icons.logo-white', ['style'=>'h-10 w-auto'])
                    </a>

                    {{-- <img class="block lg:hidden h-8 w-auto" src="/img/logos/workflow-mark-on-dark.svg"
                        alt="Workflow logo" />
                    <img class="hidden lg:block h-8 w-auto" src="/img/logos/workflow-logo-on-dark.svg"
                        alt="Workflow logo" /> --}}
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex">
                        @auth
                        <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900
                        focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Dashboard
                        </a>

                        @can('crud_courses')
                        <a href="{{ route('courses.index') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Courses
                        </a>
                        @endcan

                        @can('crud_styles')
                        <a href="{{ route('styles.index') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Styles
                        </a>
                        @endcan

                        @can('view_users')
                        <a href="{{ route('users.index') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Users
                        </a>
                        @endcan

                        @if (auth()->user()->isAdmin())
                        <a href="{{ route('roles.index') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Roles & Permissions
                        </a>
                        @endif

                        @can('crud_orders',)
                        <a href="{{ route('orders.index') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Orders
                        </a>
                        @endcan

                        @can('crud_payments')
                        <a href="{{ route('payments.index') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                            Payments
                        </a>
                        @endcan


                        @endauth

                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @auth
                {{-- <button
                    class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    aria-label="Notifications">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button> --}}

                <!-- Profile dropdown -->
                <div class="ml-3 relative" x-data="{ openAccount: false}">
                    <div>
                        <button id="user-menu" aria-label="User menu" aria-haspopup="true"
                            @click="openAccount = !openAccount" @click.away="openAccount = false"
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                            @if (auth()->user()->picture == NULL)
                            <span class="text-white capitalize">{{ auth()->user()->firstname }}</span>
                            @else
                            <img class="h-8 w-8 rounded-full" src="{{ asset(auth()->user()->avatar)}}" alt="" />
                            @endif
                        </button>
                    </div>
                    <!--    Profile dropdown panel, show/hide based on dropdown state.
                            Entering:   "transition ease-out duration-100"
                            From:       "transform opacity-0 scale-95"
                            To:         "transform opacity-100 scale-100"
                            Leaving:    "transition ease-in duration-75"
                            From:       "transform opacity-100 scale-100"
                            To:         "transform opacity-0 scale-95"-->

                    <div x-show="openAccount" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                        <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                            aria-labelledby="user-menu">
                            <a href="{{ route('dashboard') }}"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                role="menuitem">Dashboard
                            </a>
                            {{-- <a href="#"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                role="menuitem">Account Settings
                            </a> --}}
                            <a href=" {{ url('/logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                role="menuitem">Sign out
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
                @else

                <a href="{{ url('/login') }}"
                    class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                    Login
                </a>
                <a href="{{ url('/register') }}"
                    class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                    Register
                </a>
                @endauth
            </div>
        </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.
  
      Menu open: "block", Menu closed: "hidden"
    -->
    <div :class="{ 'block': openMenu, 'hidden':!openMenu }" class="hidden sm:hidden">
        <div class="px-2 pt-2 pb-3">
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard
            </a>
            <a href="#"
                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Team
            </a>
            <a href="#"
                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Projects
            </a>
            <a href="#"
                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Calendar
            </a>
        </div>
    </div>
</nav>

{{-- 
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
            <path :class="{'hidden': openMenu, 'inline-flex': !openMenu }" class="inline-flex" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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
    <div class="px-2 pt-2 pb-4 hidden md:inline-flex">



        <div class="relative pr-2 mt-1 hidden md:inline-block">
            <button @click="openAccount = !openAccount" type="button"
                class="block text-white w-8 h-8 rounded-full overflow-hidden border-2 border-gray-700 hover:border-white focus:outline-none focus:border-white">
                <img class="w-full h-full object-cover" src="{{ asset(auth()->user()->avatar) }}" alt="">
            </button>
            @include('layouts.account-dropdown')
        </div>
        @else
        <!-- Authentication Links -->


    </div>

</div>
</header> --}}