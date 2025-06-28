<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-200">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <div class="">
                            <i class="fas fa-edit text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Edit Berita</h3>
                        <p class="text-gray-600">Perbarui informasi berita</p>

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

                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" id="formEditBerita"
                        class="space-y-6">
                        @csrf
                        @method('PUT') {{-- Penting: Gunakan method PUT untuk update --}}

                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-heading text-blue-500 mr-2"></i>Judul Berita
                                </label>
                                <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-900 placeholder-gray-400"
                                    placeholder="Masukkan judul berita">
                            </div>

                            <div>
                                <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-image text-blue-500 mr-2"></i>Foto Berita
                                </label>
                                @if ($berita->foto)
                                    <div class="mb-4">
                                        <p class="text-sm text-gray-600">Foto Saat Ini:</p>
                                        <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto Berita" class="w-48 h-auto rounded-lg shadow-md mt-2">
                                    </div>
                                @endif
                                <input type="file" id="foto" name="foto"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-900 placeholder-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                <p class="mt-2 text-sm text-gray-500">Biarkan kosong jika tidak ingin mengubah foto. Maksimal ukuran foto 2MB.</p>
                            </div>

                            <div>
                                <label for="konten" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-align-left text-blue-500 mr-2"></i>Konten Berita
                                </label>
                                <textarea id="konten" name="konten" rows="8" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-900 placeholder-gray-400 resize-y"
                                    placeholder="Tulis isi berita di sini...">{{ old('konten', $berita->konten) }}</textarea>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                            <a href="{{ route('admin.berita.index') }}"
                                class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-xl transition-all duration-300 flex items-center justify-center">
                                <i class="fas fa-undo mr-2"></i>Batal
                            </a>
                            <button type="submit"
                                class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                                <i class="fas fa-save mr-2"></i>Simpan Perubahan
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
                            <strong>Catatan:</strong> Foto tidak wajib diisi ulang jika tidak ada perubahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>