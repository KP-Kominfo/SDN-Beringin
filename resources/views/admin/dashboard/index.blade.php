<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Galeri -->
                <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-5 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Total Galeri</h3>
                    <p class="text-3xl font-bold mt-2">{{ $galeriCount }}</p>
                </div>

                <!-- Teacher -->
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-5 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Total Guru</h3>
                    <p class="text-3xl font-bold mt-2">{{ $teacherCount }}</p>
                </div>

                <!-- Pengaduan -->
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-5 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Total Pengaduan</h3>
                    <p class="text-3xl font-bold mt-2">{{ $pengaduanCount }}</p>
                </div>

                <!-- Berita -->
                <div class="bg-purple-100 border-l-4 border-purple-500 text-purple-700 p-5 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Total Berita</h3>
                    <p class="text-3xl font-bold mt-2">{{ $beritaCount }}</p>
                </div>

                <!-- Lomba -->
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-5 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Total Lomba</h3>
                    <p class="text-3xl font-bold mt-2">{{ $lombaCount }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
