@auth
<a href="{{ route('welcome') }}" class="df-navigation-link {{ Request::is('/') ? 'df-navigation-link-active' : '' }}">
    Home
</a>
<a href="{{ route('dashboard') }}"
    class="df-navigation-link {{ Request::is('dashboard') ? 'df-navigation-link-active' : '' }}">
    My dashboard
</a>
<a href="{{ url('/#live') }}" class="df-navigation-link">
    Live Classes
</a>
<a href="{{ url('/#online') }}" class="df-navigation-link">
    Online Classes
</a>

{{-- <a href="{{ route('dashboard') }}"
class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700
focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
Notifications
</a>

<a href="{{ route('dashboard') }}"
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Orders
</a>

<a href=""
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Payments
</a> --}}

<br>
<br>

@can('crud_courses')
<h4 class="ml-2 uppercase">Admin</h4>
<hr class="mb-2">
<a href="{{ route('courses.index') }}"
    class="df-navigation-link {{ Request::is('courses') ? 'df-navigation-link-active' : '' }}">
    Courses
</a>
@endcan

@can('crud_styles')
<a href="{{ route('styles.index') }}"
    class="df-navigation-link {{ Request::is('styles') ? 'df-navigation-link-active' : '' }}">
    Styles
</a>
@endcan

@can('crud_users')
<a href="{{ route('users.index') }}"
    class="df-navigation-link {{ Request::is('users') ? 'df-navigation-link-active' : '' }}">
    Users
</a>
@endcan



@can('crud_roles')
<a href="{{ route('roles.index') }}"
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Roles & Permissions
</a>
@endcan

@can('crud_orders',)
<a href="{{ route('orders.index') }}"
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Orders
</a>
@endcan

@can('crud_payments')
<a href="{{ route('payments.index') }}"
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Payments
</a>
@endcan

@can('crud_locations')
<a href="{{ route('locations.index') }}"
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Locations
</a>
@endcan

@can('crud_classrooms')
<a href="{{ route('classrooms.index') }}"
    class="block px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
    Classrooms
</a>
@endcan


@endauth