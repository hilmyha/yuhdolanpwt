<nav class="bg-white border-gray-200 shadow-lg px-4 lg:px-6 py-2.5 fixed w-full z-50 top-0 left-0">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mr-4 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            
            <a href="{{ route('dashboard') }}" class="flex mr-4">
                <span class="self-center text-2xl font-semibold whitespace-nowrap"><span class="text-primary">MN</span>Dashboard</span>
            </a>
            
        </div>
        <div class="hidden lg:flex items-center lg:order-2">
            @if (date('H') >= 0 && date('H') <= 11)
                <p class="text-sm text-gray-500">Selamat Pagi, {{ Auth::user()->name }}</p>
            @elseif (date('H') >= 12 && date('H') <= 14)
                <p class="text-sm text-gray-500">Selamat Siang, {{ Auth::user()->name }}</p>
            @elseif (date('H') >= 15 && date('H') <= 17)
                <p class="text-sm text-gray-500">Selamat Sore, {{ Auth::user()->name }}</p>
            @elseif (date('H') >= 18 && date('H') <= 23)
                <p class="text-sm text-gray-500">Selamat Malam, {{ Auth::user()->name }}</p>
            @endif
        </div>
    </div>
</nav>

<aside id="default-sidebar" class="fixed pt-14 lg:pt-12 top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full flex justify-between flex-col px-3 py-4 overflow-y-auto pt-6 bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('destinasi.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Destinasi</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Kategori</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Gallery</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" /></svg>
                
                <span class="flex-1 ml-3 whitespace-nowrap">Blogs</span>
                </a>
            </li>
        </ul>
        <ul class="space-y-2 font-medium border">
            <li class="item-end">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="truncate flex items-center p-2 text-white rounded-lg bg-primary hover:bg-secondary w-full gap-2" type="button">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    {{ Auth::user()->name }}
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('home') }}" class="flex items-center py-2 px-4 font-normal gap-2 text-gray-900 lg:text-start border-gray-100 hover:bg-gray-100">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="py-1">
                            <form class="hover:bg-gray-100" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="block py-2 px-4 font-normal" type="submit">{{ __('Logout') }}</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</aside>