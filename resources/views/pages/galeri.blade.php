@extends('app')

@section('content')
<div class="bg-gray-50 py-12">
    <section class="container mx-auto px-4 ">
        <h2 class="text-3xl font-bold text-center mb-2">Galeri Foto Sekolah</h2>
        <p class="text-center text-gray-600 mb-6">Dokumentasi kegiatan dan momen berharga di SD Bringin</p>
      
      
        <!-- Masonry Style Grid -->
        <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
          <div class="break-inside-avoid rounded bg-gray-200 p-4 aspect-video flex flex-col justify-center items-center text-center text-white">
            <span class="font-semibold text-lg">Upacara Wisuda Kelas 6</span>
            <span class="text-xs mt-1">15 Juni 2025</span>
          </div>
          <!-- Tambahkan lebih banyak card dengan gaya sama -->
        </div>
      </section>
</div>
@endsection