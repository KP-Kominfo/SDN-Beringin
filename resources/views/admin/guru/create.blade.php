<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Guru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-200">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Form Tambah Guru</h3>
                        <p class="text-gray-600">Masukkan data guru secara lengkap</p>

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

                    <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Nama -->
                            <div>
                                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Guru</label>
                                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100 focus:border-blue-500 transition"
                                    placeholder="Masukkan nama guru">
                            </div>

                            <!-- Kelas -->
                            <div>
                                <label for="kelas" class="block text-sm font-semibold text-gray-700 mb-2">Kelas</label>
                                <input type="text" id="kelas" name="kelas" value="{{ old('kelas') }}"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100 focus:border-blue-500 transition"
                                    placeholder="Contoh: 1A, 3B (Opsional)">
                            </div>

                            <!-- Mapel -->
                            <div>
                                <label for="mapel" class="block text-sm font-semibold text-gray-700 mb-2">Mata Pelajaran</label>
                                <input type="text" id="mapel" name="mapel" value="{{ old('mapel') }}"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100 focus:border-blue-500 transition"
                                    placeholder="Contoh: Matematika, IPA, dll (Opsional)">
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                                <select name="kategori" id="kategori" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100 focus:border-blue-500 transition">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="guru">Guru</option>
                                    <option value="kepala-sekolah">Kepala Sekolah</option>
                                    <option value="staff">Staf</option>
                                </select>
                            </div>

                            <!-- Foto -->
                            <div>
                                <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">Foto</label>
                                <input type="file" id="foto" name="foto" accept="image/*"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                <p class="text-sm text-gray-500 mt-1">Ukuran maks: 2MB. Format: JPG, PNG.</p>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                            <a href="{{ route('admin.guru.index') }}"
                                class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-xl text-center">
                                <i class="fas fa-arrow-left mr-1"></i> Batal
                            </a>
                            <button type="submit"
                                class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-save mr-2"></i> Simpan Guru
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
                            <strong>Catatan:</strong> Pastikan semua data sudah benar sebelum menyimpan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
