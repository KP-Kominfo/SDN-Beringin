@extends('app')

@section('title', 'Galeri | SDN Bringin 01')

@section('content')
<div class="bg-gray-50 py-12">
  <section class="container mx-auto px-4">
    <div class="flex justify-center mb-4">
      <h2 class="text-2xl md:text-4xl font-bold text-center text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
        Galeri Foto Sekolah
      </h2>
    </div>
    <p class="text-center text-gray-600 mb-6">
      Dokumentasi kegiatan dan momen berharga di SD Bringin
    </p>

    @if ($galeris->count())
      <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
        @foreach ($galeris as $galeri)
          <div class="break-inside-avoid overflow-hidden rounded-lg shadow hover:shadow-lg bg-white">
            @if ($galeri->foto)
              <img src="{{ asset('storage/' . $galeri->foto) }}" alt="{{ $galeri->judul }}" class="w-full h-52 object-cover">
            @else
              <div class="w-full h-52 bg-gray-200 flex items-center justify-center text-gray-500">Tidak ada gambar</div>
            @endif
            <div class="p-4">
              <h4 class="font-semibold text-gray-800 text-base">{{ $galeri->judul }}</h4>
              <p class="text-xs text-gray-500 mt-1">{{ $galeri->created_at->translatedFormat('d F Y') }}</p>
              <span class="inline-block mt-2 text-xs font-medium bg-blue-100 text-blue-700 px-2 py-1 rounded-full">
                {{ ucfirst($galeri->kategori ?? 'Umum') }}
              </span>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center text-gray-500">Belum ada foto galeri.</p>
    @endif

  </section>
</div>
@endsection
