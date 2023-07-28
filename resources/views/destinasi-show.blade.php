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
        <div class="flex flex-col w-full gap-8">
            <div class="border flex flex-col gap-3 p-6 rounded shadow-lg bg-white">
                <div class="flex justify-between items-center mb-3 text-sm text-slate-600">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>                                  
                        
                        <p class="border-l-2 border-slate-400 ml-2 pl-2">{{ $destinasi->lokasi }}</p>
                    </div>
                    <div class="flex">
                        {{-- tambah favorite dan hapus --}}
                        @if ($favorites->count())
                            @foreach ($favorites as $item)
                                @if (Auth::user()->id != $item->user_id && $item->count())
                                    <form action="/destinasi/{{ $destinasi->id }}/favorite" method="post">
                                        @csrf
                                        <button type="submit" class="font-lg text-gray-500 hover:text-gray-600 p-2 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M10 18l-1.714-1.143C3.429 12.857 0 9.143 0 5.429 0 2.429 2.429 0 5.429 0 7.143 0 8.857.857 10 2.286 11.143.857 12.857 0 14.571 0 17.571 0 20 2.429 20 5.429c0 3.714-3.429 7.428-8.286 11.429L10 18z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                @else
                                    <form action="/destinasi/{{ $destinasi->id }}/unfavorite" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="font-lg text-red-500 hover:text-red-600 p-2 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M10 18l-1.714-1.143C3.429 12.857 0 9.143 0 5.429 0 2.429 2.429 0 5.429 0 7.143 0 8.857.857 10 2.286 11.143.857 12.857 0 14.571 0 17.571 0 20 2.429 20 5.429c0 3.714-3.429 7.428-8.286 11.429L10 18z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            
                            @endforeach
                        @endif
                            @if (! $favorites->count())
                                
                            @else
                                
                            @endif
                    </div>
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

                <form action="/tambah-ulasan/{{ $destinasi->id }}" method="post">
                    @csrf

                    {{-- <div class="w-full mt-3">
                        <x-input-label for="foto" value="Unggah Foto Liburanmu" />
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">
                    </div> --}}
    
                    <div class="mt-3 w-full">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input datepicker datepicker-autohide id="datepickerBooking" id="tanggal_berkunjung" name="tanggal_berkunjung" type="text" class="cursor-pointer border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Kapan anda Berkunjung?">
                            <x-input-error :messages="$errors->get('tanggal_berkunjung')" class="mt-2" />
                        </div>
                    </div>
        
                    <div class="w-full mt-3">
                        <x-text-input id="judul" name="judul" type="text" value="{{ old('judul') }}" placeholder="Masukkan Judul Ulasan"/>
                        <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                    </div>
                    <div class="w-full mt-3">
                        <x-input-label for="isi" value="Tulis Ulasan" />
                        <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
                        <trix-editor input="isi"></trix-editor>
                        <x-input-error :messages="$errors->get('isi')" class="mt-2" />
                    </div>
                    
                    <x-primary-button type="submit" class="mt-4 transition">Kirim Ulasan</x-primary-button>
                </form>
    
            </div>
            
            <div class="border flex flex-col p-6 bg-white shadow-lg rounded">
                <h4 class="font-bold text-xl text-gray-500 mb-4">Ulasan</h4>

                @if ($ulasans->count())
                    @foreach ($ulasans as $item)
                        <div class="border-t-4 mb-4 border-gray-400 shadow-md text-gray-600 p-4 flex justify-between">
                            <div class="">
                                <h1 class="text-lg font-bold">{{ $item->judul }}</h1>
                                <p class="text-sm text-gray-500 mt-1">{{ $item->user->name }} | Berkunjung pada, {{ date("d M Y", strtotime($item->tanggal_berkunjung)) }}</p>
                                <p class="mt-3">{!! $item->isi !!}</p>
                            </div>
                            <div class="">
                                {{-- show hanya user yang terkait yang dapat delete dan tampilkan pada saat tidak ada yang login --}}
                                @if (Auth::check() && Auth::user()->id == $item->user_id)
                                    <form action="/hapus-ulasan/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="font-medium text-white p-2 bg-red-500 hover:bg-red-600 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-red-500">Belum ada ulasan untuk destinasi ini.</p>
                @endif
                
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