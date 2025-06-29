@extends('app')

@section('content')
  <div class="bg-gray-50 py-12">
    <section class="container mx-auto px-4">
      <div class="flex justify-center mb-4">

        <h2
            class="text-2xl md:text-4xl font-bold text-center text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
            Lomba {{ $judul }}</h2>
    </div>
      <p class="text-center text-gray-600 mb-6">Daftar prestasi kategori {{ $judul }}</p>

      <x-lomba-section :kategori="$judul" :items="$data" />
    </section>
  </div>
@endsection
