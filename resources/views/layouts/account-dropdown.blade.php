<div :class="{ 'block': openAccount, 'hidden':!openAccount }"
    class="absolute right-0 mt-1 w-48 bg-white rounded-lg py-2 shadow-lg">
    <a href="#" class="block px-2 py-1 text-gray-800 hover:bg-gray-300">Profile</a>
    <a href="#" class="block px-2 py-1 text-gray-800 hover:bg-gray-300">Account Settings</a>
    <a href="{{ url('/logout') }}" class="block px-2 py-1 text-gray-800 hover:bg-gray-300"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>