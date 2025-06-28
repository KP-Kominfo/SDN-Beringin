@extends('app')

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-2">Lomba Sekolah</h2>
    <p class="text-center text-gray-600 mb-6">literasi</p>
  
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="rounded-lg shadow p-4 bg-white">
        <div class="bg-gray-100 p-3 rounded mb-3 font-semibold">Olimpiade Matematika</div>
        <h3 class="font-bold text-lg">Olimpiade Matematika Tingkat Kota</h3>
        <p class="text-sm text-gray-500 mb-2">20 Januari 2025 • Juara 1</p>
        <p class="text-sm font-medium text-gray-700">Peserta Lomba:</p>
        <ul class="text-sm text-gray-600 list-disc pl-5">
          <li>Ahmad Rizki (Kelas 6A)</li>
          <li>Sari Dewi (Kelas 6B)</li>
          <li>Budi Santoso (Kelas 5A)</li>
        </ul>
      </div>
      <!-- Tambahkan card lomba lainnya dengan struktur serupa -->
    </div>
  </section>
@endsection