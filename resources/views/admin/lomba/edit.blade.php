<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Lomba') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-200">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Edit Data Lomba</h3>
                        <p class="text-gray-600">Perbarui informasi lomba</p>

                        @if ($errors->any())
                            <div class="mb-4">
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                                    <strong>Ups! Ada kesalahan input:</strong>
                                    <ul class="mt-2 list-disc list-inside text-sm">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>

                    <form action="{{ route('admin.lomba.update', $lomba->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Nama Lomba -->
                            <div>
                                <label for="nama_lomba" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lomba</label>
                                <input type="text" id="nama_lomba" name="nama_lomba" value="{{ old('nama_lomba', $lomba->nama_lomba) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100">
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                                <input type="text" id="kategori" name="kategori" value="{{ old('kategori', $lomba->kategori) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Tingkat -->
                            <div>
                                <label for="tingkat" class="block text-sm font-semibold text-gray-700 mb-2">Tingkat</label>
                                <input type="text" id="tingkat" name="tingkat" value="{{ old('tingkat', $lomba->tingkat) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Prestasi -->
                            <div>
                                <label for="prestasi" class="block text-sm font-semibold text-gray-700 mb-2">Prestasi</label>
                                <input type="text" id="prestasi" name="prestasi" value="{{ old('prestasi', $lomba->prestasi) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Tanggal -->
                            <div>
                                <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $lomba->tanggal->format('Y-m-d')) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Deskripsi -->
                            <div>
                                <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" rows="6" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl resize-y">{{ old('deskripsi', $lomba->deskripsi) }}</textarea>
                            </div>

                            <!-- Gambar -->
                            <div>
                                <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">Gambar</label>
                                @if ($lomba->gambar)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $lomba->gambar) }}" class="w-48 h-auto rounded shadow">
                                        <p class="text-sm mt-1 text-gray-500">Gambar saat ini</p>
                                    </div>
                                @endif
                                <input type="file" id="gambar" name="gambar"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-900 placeholder-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                <p class="text-sm text-gray-500 mt-1">Biarkan kosong jika tidak mengubah gambar. Maksimal 2MB (jpg/png).</p>
                            </div>
                        </div>

                        <!-- Aksi -->
                        <div class="flex justify-between mt-6">
                            <a href="{{ route('admin.lomba.index') }}"
                                class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-2 rounded-xl">
                                Batal
                            </a>
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-xl">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
