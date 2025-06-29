@extends('app')

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="bg-white p-6 shadow sm:rounded-lg">

        <div class="text-center mb-10">
          <h2 class="text-2xl font-bold">Profil Guru & Tenaga Pendidik</h2>
          <p class="text-gray-600 mt-1">
            Guru profesional yang berdedikasi untuk memberikan pendidikan terbaik bagi siswa-siswi SD Bringin
          </p>
        </div>

        {{-- Tampilkan kategori kepala sekolah --}}
        @if ($teachers->has('kepala-sekolah'))
        <div class="mb-10">
          <h3 class="text-xl text-center font-semibold mb-4">Kepala Sekolah & Wakil</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 justify-items-center">
            @foreach ($teachers['kepala-sekolah'] as $guru)
              <div class="bg-gray-50 p-4 rounded-xl text-center shadow hover:shadow-md transition duration-300 w-full max-w-xs">
                <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}"
                    class="mx-auto w-24 h-24 rounded-full object-cover mb-3 border border-gray-200 shadow">
                <h4 class="font-bold text-gray-800">{{ $guru->nama }}</h4>
              </div>
            @endforeach
          </div>
        </div>
      @endif
      
        {{-- Tampilkan guru kelas --}}
        @if ($teachers->has('guru'))
          <div class="mb-10">
            <h3 class="text-xl text-center font-semibold mb-4">Guru Kelas</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
              @foreach ($teachers['guru'] as $guru)
                <div class="bg-gray-50 p-4 rounded-xl text-center shadow hover:shadow-md transition duration-300">
                  <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}"
                      class="mx-auto w-24 h-24 rounded-full object-cover mb-3 border border-gray-200 shadow">
                  <h4 class="font-bold text-gray-800">{{ $guru->nama }}</h4>
                </div>
              @endforeach
            </div>
          </div>
        @endif

      </div>
    </div>
  </div>
@endsection
