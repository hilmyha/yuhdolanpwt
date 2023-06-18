<x-dash-layout>

    <div class="p-4 sm:ml-64 mt-14 lg:mt-12">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
            <div class="mb-4 p-6 overflow-hidden rounded bg-white">
                <form action="/dashboard/destinasi" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="grid gap-4">
                            <div class="w-full">
                                <x-input-label for="nama" value="Destinasi Name" />
                                <x-text-input id="nama" name="nama" type="text" value="{{ old('nama') }}" placeholder="Destinasi name" />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>
                            <div class="w-full">
                                <x-input-label for="slug" value="Slug" />
                                <x-text-input id="slug" name="slug" type="text" value="{{ old('slug') }}" placeholder="Slug"/>
                                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                            </div>
                            <div class="lg:col-span-2">
                                <x-input-label for="excerpt" value="Excerpt" />
                                <x-text-input id="excerpt" name="excerpt" type="text" value="{{ old('excerpt') }}" placeholder="Excerpt" />
                                <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                            </div>
                            <div class="w-full">
                                <x-input-label for="lokasi" value="Lokasi" />
                                <x-text-input id="lokasi" name="lokasi" type="text" value="{{ old('lokasi') }}" placeholder="Lokasi" />
                                <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                            </div>
                            <div class="w-full">
                                <x-input-label for="category" value="Category" />
                                <select name="category_id" id="category" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category')" class="mt-2" />
                            </div>
                            <div class="lg:col-span-2">
                                <x-input-label for="harga" value="Harga" />
                                <x-text-input id="harga" name="harga" type="text" value="{{ old('harga') }}" placeholder="Harga" />
                                <x-input-error :messages="$errors->get('harga')" class="mt-2" />
                            </div>
                            
                            <div class="lg:col-span-2">
                                <x-input-label for="deskripsi" value="Description" />
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                                <trix-editor input="deskripsi"></trix-editor>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                        </div>
                        <x-primary-button type="submit" class="mt-4 transition">Submit</x-primary-button>
                </form>

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