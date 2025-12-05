<nav class="flex flex-wrap items-center justify-between p-3 bg-teal-200/20">

    @auth
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <span class="ml-2">{{ auth()->user()->name }}</span>
        </div>
    @endauth

    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png"
                width="48" height="48" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
                width="48" height="48" />
        </button>
    </div>

    <div
        class="toggle hidden w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 border-t-2 border-teal-900 md:border-none">
        @if (Route::has('login'))
            @auth
                <input type="hidden" id="user" value="{{ \Illuminate\Support\Facades\Auth::id() }}">
                <a href="{{ route('home') }}"
                    class="block md:inline-block text-teal-900 hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">
                    Home
                </a>
                <a href="{{ url('/dashboard') }}"
                    class="block md:inline-block text-teal-900 hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">
                    Dashboard
                </a>
                <a href="{{ url('/tasks') }}"
                    class="block md:inline-block text-teal-900 hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">Tasks
                </a>
                <a href="{{ url('/create') }}"
                    class="block md:inline-block text-teal-900 hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">Create
                </a>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button href="#"
                        class="block md:inline-block text-teal-900
                     hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="block md:inline-block text-teal-900 hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">Login
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="block md:inline-block text-teal-900 hover:text-teal-500 px-3 py-3 border-b-2 border-teal-900 md:border-none">Contact
                    </a>
                @endif
            @endauth
        @endif
    </div>
    @guest
        <a href="#"
            class="toggle hidden md:flex w-full md:w-auto
                     px-4 py-2 text-right bg-teal-900
                    hover:bg-teal-500 text-white md:rounded">Create
            Account
        </a>
    @endguest

</nav>
<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
</script>
