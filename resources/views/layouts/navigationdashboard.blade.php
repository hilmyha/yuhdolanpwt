<nav class="bg-white border-gray-200 shadow-lg px-4 lg:px-6 py-2.5 fixed w-full z-50 top-0 left-0">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mr-4 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
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

<aside id="default-sidebar" class="fixed pt-14 lg:pt-12 top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
    <div class="h-full flex justify-between flex-col px-3 py-4 overflow-y-auto pt-6 bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('favorite.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                
                <span class="flex-1 ml-3 whitespace-nowrap">Favorite</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ulasan.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
                
                <span class="flex-1 ml-3 whitespace-nowrap">Ulasan</span>
                </a>
            </li>
            @can('admin')
                
                <li class="pt-4">
                    <h4 class="p-2 border-b border-t bg-gray-50 font-bold">Administrator</h4>
                </li>
                <li>
                    <a href="{{ route('destinasi.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Destinasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>

                    <span class="flex-1 ml-3 whitespace-nowrap">Gallery</span>
                    </a>
                </li>
            @endcan
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