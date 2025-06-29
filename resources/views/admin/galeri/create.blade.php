<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Tambah Galeri') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-200">
          <div class="p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Form Tambah Galeri</h3>
  
            @if ($errors->any())
              <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <strong>Ups! Ada kesalahan input:</strong>
                <ul class="mt-2 list-disc list-inside text-sm">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
  
            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
              @csrf
  
              <div>
                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required
                 placeholder="Masukkan judul galeri" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100 focus:border-blue-500 transition">
              </div>
  
              <div>
                <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                <input type="text" name="kategori" id="kategori" value="{{ old('kategori') }}" required
                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring focus:ring-blue-100 focus:border-blue-500 transition"
                  placeholder="Contoh: Kegiatan, Fasilitas, Prestasi">
              </div>
  
            
  
              <div>
                <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-100 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer"
                old="{{ old('gambar') }}">
                <p class="text-sm text-gray-500 mt-1">Ukuran maks: 2MB. Format: JPG, PNG.</p>
              </div>
  
              <div class="flex justify-between">
                <a href="{{ route('admin.galeri.index') }}"
                  class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-2 rounded-xl">
                  Batal
                </a>
                <button type="submit"
                  class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-xl">
                  Simpan Galeri
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
  