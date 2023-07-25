<x-dash-layout>

    <div class="p-4 lg:ml-64 mt-14 lg:mt-12">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
            @if (session()->has('success'))
                <div id="alert-border" class="flex p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8"  data-dismiss-target="#alert-border" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            @endif
            
            <div class="flex flex-col p-4 mb-4 rounded bg-gray-50">
                <div class="mb-4">
                    <h1 class="text-2xl font-semibold text-gray-700">Destinasi yang anda ulas</h1>
                </div>
                <div class="relative w-full overflow-x-auto mb-4">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul Ulasan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Berkunjung
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Destinasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ulasans as $ulasan)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $ulasan->isi }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $ulasan->tanggal_berkunjung }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $ulasan->destinasi->nama }}
                                    </th>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <div class="flex gap-1 items-center justify-end">
                                            <a href="/destinasi/{{ $ulasan->destinasi->slug }}" class="font-medium text-white p-2 bg-green-600 hover:bg-green-700 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
        </div>
    </div>

</x-dash-layout>