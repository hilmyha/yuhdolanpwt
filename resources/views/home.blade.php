<x-app-layout>
    <x-slot name="header">
        <div class="h-screen grid place-items-center overflow-hidden">
            <img class="brightness-50 w-full h-full object-cover" src="{{ asset('img/hero_2.jpg') }}" alt="hero image">
            <div class="container absolute flex flex-col h-full justify-between py-6">
                <div class="w-full">
                
                </div>
                <div class="w-full lg:w-1/2">
                    <a href="#aplikasi" class="hidden lg:inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-red-700 bg-red-50 rounded-full hover:bg-red-100">
                        <span class="text-xs bg-red-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">Android App was launched! See what's new</span> 
                        <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                    <h1 class="font-extrabold tracking-tight leading-none text-4xl md:text-6xl text-white mb-8">It is Better to Travel Well Than to Arrive</h1>
                    <span class="text-white text-lg font-normal hidden lg:block">YuhDolan hadir bukan hanya sebagai media informasi akan destinasi wisata, YuhDolan juga merupakan suatu platform yang menyediakan jasa tour guide dengan harapan dapat saling menguntungkan pihak yang relevan satu sama lain.</span>
                </div>
                <div class="w-full flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" text-white w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>                      
                    <span class="text-white text-sm font-normal">Purwokerto, Indonesia</span>
                </div>
            </div>
        </div>
    </x-slot>
    
    <div class="pt-36 pb-12">
        <div class="container flex flex-col gap-12">

            
            @if ($destinasi->count())

                <h3 class="text-4xl font-extrabold">Destinasi terupdate di Purwokerto</h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach ($destinasi->take(3) as $destinasi)
                    <a class="shadow-lg bg-white hover:shadow-2xl transition duration-200 group" href="/destinasi/{{ $destinasi->slug }}">
                        <div class="w-full">
                            <div class="w-full h-[300px] overflow-hidden">
                                <img class="brightness-50 w-full h-full object-cover group-hover:scale-125 group-hover:blur-sm transition duration-200" src="{{ asset('img/hero_2.jpg') }}" alt="">
                            </div>
                            <div class="p-4">
                                <span class="bg-primary text-white text-xs px-3 py-1 rounded-full">Category</span>
                                <h4 class="mt-3 text-xl lg:text-2xl font-bold group-hover:text-primary transition duration-200">{{ $destinasi->nama }}</h4>
                                <div class="flex items-center mt-4 text-sm text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                    </svg>                                  
                                    
                                    <p class="border-l-2 border-slate-400 ml-2 pl-2">{{ $destinasi->lokasi }}</p>
                                </div>
                                <p class="mt-2 text-justify">{{ $destinasi->excerpt }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            @else
                <div class="text-red-500 flex flex-col gap-2 items-center py-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0012.016 15a4.486 4.486 0 00-3.198 1.318M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                    </svg>

                    <h3 class="text-3xl font-bold">No post found.</h3>
                </div>
            @endif
        </div>
    </div>

    <div class="pt-24 pb-12" id="aplikasi">
        <div class="container flex items-center gap-12">
            <div class=" w-full xl:w-1/2">
                <h3 class="mb-6 text-4xl font-extrabold">Aplikasi Kami</h3>
                <p class="text-justify mb-3">Yuhdolan telah tersedia di aplikasi perangkat anda. Dengan adanya fitur ini, pengguna akan mendapatkan pengalaman yang lebih lengkap dan menarik dalam menggunakan aplikasi.</p>
                <p class="mb-6 text-justify">Yuhdolan adalah fitur inovatif yang dirancang khusus untuk memenuhi kebutuhan dan keinginan pengguna. Fitur ini memungkinkan pengguna untuk menjelajahi berbagai konten menarik, mulai dari destinasi wisata terkini, tips kehidupan sehari-hari, hiburan, dan masih banyak lagi. Dengan adanya Yuhdolan, pengguna akan merasa terhubung dengan dunia sekitar mereka dan selalu mendapatkan informasi terbaru yang relevan.</p>
                <div class="flex">
                    <a href="#" class="p-4 rounded-md bg-primary hover:bg-gray-500 flex items-center gap-2 transition">
                        <svg class="w-6 h-6" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M47.6514 34.3213L15.3223 1.9043L56.4551 25.5176L47.6514 34.3213ZM6.88477 0C4.98047 0.996094 3.70605 2.8125 3.70605 5.1709V69.8145C3.70605 72.1729 4.98047 73.9893 6.88477 74.9854L44.4727 37.4854L6.88477 0ZM69.1699 33.0469L60.542 28.0518L50.918 37.5L60.542 46.9482L69.3457 41.9531C71.9824 39.8584 71.9824 35.1416 69.1699 33.0469ZM15.3223 73.0957L56.4551 49.4824L47.6514 40.6787L15.3223 73.0957Z" fill="white"/>
                        </svg>
                        <span class="text-white font-futura font-semibold">Google Play</span>
                    </a>
                </div>
            </div>
            <div class="w-1/2 xl:grid grid-flow-col justify-end gap-4 hidden">

                <div class="mt-24 relative mx-auto border-gray-800 bg-gray-800 border-[14px] rounded-xl h-[600px] w-[300px] shadow-xl">
                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                    <div class="h-[32px] w-[3px] bg-gray-800 absolute -left-[17px] top-[72px] rounded-l-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[178px] rounded-l-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg"></div>
                    <div class="rounded-xl overflow-hidden w-[272px] h-[572px] bg-white">
                        <img src="{{ asset('img/mockup_1.jpg') }}" class="w-[272px] h-[572px]" alt="">
                    </div>
                </div>
                <div class="mb-24 relative mx-auto border-gray-800 bg-gray-800 border-[14px] rounded-xl h-[600px] w-[300px] shadow-xl">
                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                    <div class="h-[32px] w-[3px] bg-gray-800 absolute -left-[17px] top-[72px] rounded-l-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[178px] rounded-l-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg"></div>
                    <div class="rounded-xl overflow-hidden w-[272px] h-[572px] bg-white">
                        <img src="{{ asset('img/mockup_2.jpg') }}" class="w-[272px] h-[572px]" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="pt-24 pb-12">

    </div>

</x-app-layout>