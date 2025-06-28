@extends('app')

@section('content')
  <div class="bg-gray-50 py-12">
    <section class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-2">Lomba: {{ $judul }}</h2>
      <p class="text-center text-gray-600 mb-6">Daftar prestasi kategori {{ $judul }}</p>

      <x-lomba-section :kategori="$judul" :items="$data" />
    </section>
  </div>
@endsection
