<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lomba') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-200">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Edit Lomba</h3>
                        <p class="text-gray-600">Perbarui informasi lomba</p>

                        @if ($errors->any())
                            <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                                <strong>Ups! Ada kesalahan input:</strong>
                                <ul class="mt-2 list-disc list-inside text-sm">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Judul -->
                            <div>
                                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">Judul
                                    Berita</label>
                                <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul) }}"
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-blue-100 focus:border-blue-500 transition"
                                    placeholder="Masukkan judul berita">
                            </div>

                            <!-- Konten -->
                            <div>
                                <label for="konten"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Konten</label>
                                <textarea id="konten" name="konten" rows="5" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-blue-100 focus:border-blue-500 resize-y transition"
                                    placeholder="Tulis isi berita">{{ old('konten', $berita->konten) }}</textarea>
                            </div>

                            <!-- Foto -->
                            <div>
                                <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">Foto
                                    Berita</label>
                                @if ($berita->foto)
                                    <div class="mb-3">
                                        <p class="text-sm text-gray-600">Foto Saat Ini:</p>
                                        <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto Berita"
                                            class="w-48 h-auto rounded-lg shadow-md mt-2">
                                    </div>
                                @endif
                                <input type="file" id="foto" name="foto" accept="image/*"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-blue-100 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                <p class="text-sm text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengganti foto.
                                </p>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                            <a href="{{ route('admin.berita.index') }}"
                                class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-xl text-center">
                                <i class="fas fa-arrow-left mr-1"></i> Batal
                            </a>
                            <button type="submit"
                                class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-save mr-2"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="mt-6 bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-xl">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-blue-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-blue-700">
                            <strong>Catatan:</strong> Foto tidak wajib diganti jika tidak ada perubahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>