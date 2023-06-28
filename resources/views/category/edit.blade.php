<x-dash-layout>

    <div class="p-4 lg:ml-64 mt-14 lg:mt-12">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
            <div class="mb-4 p-6 overflow-hidden rounded bg-white">
                <form action="/dashboard/category" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="grid gap-4">
                            <div class="w-full">
                                <x-input-label for="nama" value="Category Name" />
                                <x-text-input id="nama" name="nama" type="text" value="{{ old('nama', $category->nama) }}" placeholder="Category name" />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
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