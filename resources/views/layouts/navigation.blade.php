<nav class="navbar border-gray-200 fixed w-full z-20 top-0 left-0 shadow-lg">
    <div class="container flex flex-wrap items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('img/icov2.png') }}" alt="logo" class="w-10 h-10 mr-2">
            <span class="self-center text-2xl font-extrabold whitespace-nowrap">YuhDolan</span>
        </a>
        <div class="flex items-center lg:order-2">
            @if (Route::has('login'))
                @auth
                    <x-user-dropdown />
                @else
                    <a href="{{ route('login') }}" class="login-btn text-white bg-primary hover:bg-secondary focus:ring-4 focus:ring-primary font-medium rounded-full text-sm px-4 lg:px-8 py-2 lg:py-2 focus:outline-none transition">Log in</a>
                @endauth
            @endif
            
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-6 lg:mt-0 items-center">
                <li>
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        Home
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('destinasi') }}" :active="request()->routeIs('destinasi')">
                        Destinasi
                    </x-nav-link>
                </li>
                <li>
                    <a href="#" class="block py-2 text-gray-700 border-b text-center lg:text-start border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary">Blogs</a>
                </li>
                <li>
                    <a href="#" class="block py-2 text-gray-700 border-b text-center lg:text-start border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>