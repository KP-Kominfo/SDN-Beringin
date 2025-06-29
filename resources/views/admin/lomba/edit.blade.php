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

                    <form action="{{ route('admin.lomba.update', $lomba->id) }}" method="POST" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Nama Lomba -->
                            <div>
                                <label for="nama_lomba" class="block text-sm font-semibold text-gray-700 mb-2">Nama
                                    Lomba</label>
                                <input type="text" id="nama_lomba" name="nama_lomba" value="{{ old('nama_lomba', $lomba->nama_lomba) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100">
                            </div>

                            <!-- Nama Peserta -->
                            <div>
                                <label for="nama_peserta" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Nama Peserta
                                </label>

                                @php
                                    $peserta = old('nama_peserta') ?? (is_array($lomba->nama_peserta) ? $lomba->nama_peserta : json_decode($lomba->nama_peserta, true));
                                @endphp

                                @for ($i = 0; $i < 5; $i++)
                                    <input type="text" name="nama_peserta[]"
                                        value="{{ $peserta[$i] ?? '' }}"
                                        class="w-full px-4 py-2 mb-2 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-100 focus:border-blue-500 transition"
                                        placeholder="Nama Peserta {{ $i + 1 }}">
                                @endfor
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="kategori"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                                <select id="kategori" name="kategori" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-blue-100 focus:border-blue-500 transition">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="mapsi" {{ old('kategori', $lomba->kategori) == 'mapsi' ? 'selected' : '' }}>MAPSI</option>
                                    <option value="literasi" {{ old('kategori', $lomba->kategori) == 'literasi' ? 'selected' : '' }}>Literasi</option>
                                    <option value="fls2n" {{ old('kategori', $lomba->kategori) == 'fls2n' ? 'selected' : '' }}>FLS2N</option>
                                    <option value="bahasa-jawa" {{ old('kategori', $lomba->kategori) == 'bahasa-jawa' ? 'selected' : '' }}>Bahasa Jawa</option>
                                    <option value="berprestasi" {{ old('kategori', $lomba->kategori) == 'berprestasi' ? 'selected' : '' }}>Siswa Berprestasi</option>
                                    <option value="motivasi-inspiratif" {{ old('kategori', $lomba->kategori) == 'motivasi-inspiratif' ? 'selected' : '' }}>Motivasi & Inspiratif</option>
                                </select>
                            </div>

                            <!-- Tingkat -->
                            <div>
                                <label for="tingkat"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Tingkat</label>
                                <input type="text" id="tingkat" name="tingkat" value="{{ old('tingkat', $lomba->tingkat) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Prestasi -->
                            <div>
                                <label for="prestasi"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Prestasi</label>
                                <input type="text" id="prestasi" name="prestasi" value="{{ old('prestasi', $lomba->prestasi) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Tanggal -->
                            <div>
                                <label for="tanggal"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $lomba->tanggal->format('Y-m-d')) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Deskripsi -->
                            <div>
                                <label for="deskripsi"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" rows="5" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl resize-y transition"
                                    placeholder="Tulis deskripsi kegiatan lomba...">{{ old('deskripsi', $lomba->deskripsi) }}</textarea>
                            </div>

                            <!-- Gambar -->
                            <div>
                                <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">Gambar
                                    Lomba</label>

                                @if ($lomba->gambar)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $lomba->gambar) }}" class="w-48 h-auto rounded shadow">
                                        <p class="text-sm mt-1 text-gray-500">Gambar saat ini</p>
                                    </div>
                                @endif

                                <input type="file" id="gambar" name="gambar" accept="image/*"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                <p class="text-sm text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                            <a href="{{ route('admin.lomba.index') }}"
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
        </div>
    </div>
</x-app-layout>
