<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <div class="flex min-h-screen">
            <div class="relative hidden lg:block h-screen w-1/2 bg-black overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset('img/guest.png') }}" alt="hero image">
                <div class="py-12 px-16 container absolute flex flex-col h-full z-20 top-0 justify-end">
                    <div class="w-full flex items-center gap-2">
                        <x-application-logo class="w-12 h-12 fill-current text-white" />
                        <span class="text-white text-xl font-bold">Yuhdolan</span>
                    </div>
                </div>
            </div>
            <div class="h-screen w-full lg:w-1/2 bg-white flex items-center">
                <div class="p-12 w-full lg:p-28">
                    {{ $slot }}

                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-64 h-px my-8 bg-gray-200 border-0">
                        <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 lg:-translate-x-3/4 bg-white left-1/2 lg:left-3/4">or</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
