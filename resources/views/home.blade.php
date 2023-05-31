<x-app-layout>
    <x-slot name="header">
        <div class="h-screen grid place-items-center overflow-hidden">
            <img class="brightness-50 w-full h-full object-cover" src="{{ asset('img/hero_2.jpg') }}" alt="hero image">
            <div class="container absolute flex flex-col h-full justify-between py-6">
                <div class="w-full">
                
                </div>
                <div class="w-full lg:w-1/2">
                    <h1 class="font-playfair font-extrabold tracking-tight leading-none text-4xl md:text-6xl text-white mb-8">It is Better to Travel Well Than to Arrive</h1>
                    <span class="text-white text-lg font-normal">YuhDolan hadir bukan hanya sebagai media informasi akan destinasi wisata, YuhDolan juga merupakan suatu platform yang menyediakan jasa tour guide dengan harapan dapat saling menguntungkan pihak yang relevan satu sama lain.</span>
                </div>
                <div class="w-full flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" text-white w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>                      
                    <span class="text-white text-sm font-normal">Yogyakarta, Indonesia</span>
                </div>
            </div>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
        </div>
    </div>
</x-app-layout>