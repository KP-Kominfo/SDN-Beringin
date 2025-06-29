<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Guru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-200">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Edit Data Guru</h3>
                        <p class="text-gray-600">Perbarui informasi guru</p>

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

                    <form action="{{ route('admin.guru.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Nama -->
                            <div>
                                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Guru</label>
                                <input type="text" id="nama" name="nama" value="{{ old('nama', $teacher->nama) }}" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100">
                            </div>

                            <!-- Kelas -->
                            <div>
                                <label for="kelas" class="block text-sm font-semibold text-gray-700 mb-2">Kelas</label>
                                <input type="text" id="kelas" name="kelas" value="{{ old('kelas', $teacher->kelas) }}"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Mapel -->
                            <div>
                                <label for="mapel" class="block text-sm font-semibold text-gray-700 mb-2">Mata Pelajaran</label>
                                <input type="text" id="mapel" name="mapel" value="{{ old('mapel', $teacher->mapel) }}"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                                <select id="kategori" name="kategori" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="guru" {{ old('kategori', $teacher->kategori) == 'guru' ? 'selected' : '' }}>Guru</option>
                                    <option value="kepala-sekolah" {{ old('kategori', $teacher->kategori) == 'kepala-sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                                    <option value="staff" {{ old('kategori', $teacher->kategori) == 'staff' ? 'selected' : '' }}>Staf</option>
                                </select>
                            </div>

                            <!-- Foto -->
                            <div>
                                <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">Foto</label>
                                @if ($teacher->foto)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $teacher->foto) }}" class="w-32 h-32 object-cover rounded shadow">
                                        <p class="text-sm text-gray-500 mt-1">Foto saat ini</p>
                                    </div>
                                @endif
                                <input type="file" id="foto" name="foto"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                <p class="text-sm text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengganti. Maks. 2MB.</p>
                            </div>
                        </div>

                        <!-- Aksi -->
                        <div class="flex justify-between mt-6">
                            <a href="{{ route('admin.guru.index') }}"
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
