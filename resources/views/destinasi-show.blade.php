<x-app-layout>
    <x-slot name="header">
        <div class="h-[500px] bg-slate-700 grid place-items-center overflow-hidden">
            <div class="container absolute flex flex-col justify-between py-6">
                <div class="w-full"></div>
                <div class="w-full lg:w-1/2">
                    <h1 class="font-playfair font-extrabold tracking-tight leading-none text-3xl md:text-6xl text-white mb-8">{{ $destinasi->nama }}</h1>
                    <h4 class="font-playfair font-bold tracking-tight leading-none text-xl text-white mb-8">{{ $destinasi->category->nama }}</h4>
                </div>
                <div class="w-full flex items-center gap-2">
                    
                </div>
            </div>
        </div>
    </x-slot>
    
    <div class="py-12 container flex flex-col lg:flex-row gap-8">
        <div class="flex flex-col w-full lg:w-[70%] gap-8">
            <div class="border flex flex-col gap-3 p-6 rounded shadow-lg bg-white">
                <div class="flex items-center mb-3 text-sm text-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>                                  
                    
                    <p class="border-l-2 border-slate-400 ml-2 pl-2">{{ $destinasi->lokasi }}</p>
                </div>
                <p class="text-justify text-gray-500">{!! $destinasi->deskripsi !!}</p>
    
                <div class="">
                    <p class="mb-3 font-bold text-xl text-gray-500">Maps</p>
                    <hr>
                    <!--The div element for the map -->
                    <div id="map" class="mt-4 w-full h-[300px] rounded-lg border"></div>
                </div>

                <div class="">
                    <p class="mb-3 font-bold text-xl text-gray-500">Fasilitas</p>
                    <hr>
                </div>
    
                
            </div>

            <div class="border flex flex-col p-6 bg-white shadow-lg rounded">
                <h4 class="font-bold text-xl text-gray-500 mb-4">Tulis Ulasan</h4>

                <div class="w-full mt-3">
                    <x-input-label for="foto" value="Unggah Foto Liburanmu" />
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">
                </div>

                <div class="mt-3 w-full">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input datepicker datepicker-autohide id="datepickerBooking" type="text" class="cursor-pointer border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Kapan anda Berkunjung?">
                    </div>
                </div>
    
                <div class="w-full mt-3">
                    <x-text-input id="judul-ulasan" name="judul-ulasan" type="text" value="{{ old('judul-ulasan') }}" placeholder="Masukkan Judul Ulasan"/>
                    <x-input-error :messages="$errors->get('judul-ulasan')" class="mt-2" />
                </div>
                <div class="w-full mt-3">
                    <x-input-label for="ulasan" value="Tulis Ulasan" />
                    <input id="ulasan" type="hidden" name="ulasan" value="{{ old('ulasan') }}">
                    <trix-editor input="ulasan"></trix-editor>
                    <x-input-error :messages="$errors->get('ulasan')" class="mt-2" />
                </div>
    
                <x-primary-button type="submit" class="mt-4 transition">Kirim Ulasan</x-primary-button>
            </div>

        </div>

        <div class="flex flex-col h-fit w-full lg:w-[30%] gap-8">
            <div class="border flex flex-col p-6 bg-white shadow-lg rounded">
                <h4 class="font-bold text-xl text-gray-500 mb-4">Booking</h4>
    
                <div class="w-full mt-3">
                    <x-text-input id="nama" name="nama" type="text" value="{{ old('nama') }}" placeholder="Nama"/>
                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                </div>
                <div class="w-full mt-3">
                    <x-text-input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                
                <div class="relative w-full mt-3">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker datepicker-autohide id="datepickerBooking" type="text" class="cursor-pointer border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select Date">
                </div>
    
                <x-primary-button type="submit" class="mt-4 transition">Booking</x-primary-button>
            </div>
            
            
            

        </div>
    </div>

    <script>
        // fungsi untuk maps
            function initMap() {
                var coords = {
                    lat: {{ $destinasi->lat }},
                    lng: {{ $destinasi->lng }}
                }

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: coords
                })

                var marker = new google.maps.Marker({
                    position: coords,
                    map: map,
                    title: "{{ $destinasi->nama }}",
                })
            }

            window.addEventListener('load', () => {
                initMap()
            })
    </script>
</x-app-layout>