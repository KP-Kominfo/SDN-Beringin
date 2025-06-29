@extends('app')


@section('content')
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <!-- Profil Sekolah -->
      <div class="text-center mb-12">
        <div class="flex justify-center mb-4">

            <h2
                class="text-2xl md:text-4xl font-bold text-center text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
                Profil SD Beringin 01</h2>
        </div>
        <p class="text-gray-600 mt-2">Mengenal lebih dekat visi, misi, dan nilai-nilai yang menjadi fondasi pendidikan di SD Beringin</p>
      </div>
  
      <!-- Visi dan Misi -->
      <div class="grid md:grid-cols-2 gap-6 mb-12">
        <div class="bg-gray-100 p-6 rounded shadow">
          <h3 class="text-xl font-semibold mb-2">Visi Sekolah</h3>
          <p class="text-gray-700">"Terwujudnya siswa beriman, berkarakter, berbudi pekerti luhur, sehat jasmani rohani, cerdas, terampil, menuju prestasi."</p>
        </div>
        <div class="bg-gray-100 p-6 rounded shadow">
          <h3 class="text-xl font-semibold mb-2">Misi Sekolah</h3>
          <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>Melaksanakan pembelajaran dan bimbingan secara efektif.</li>
            <li>Menumbuhkan semangat berprestasi bagi seluruh warga sekolah.</li>
            <li>Mendorong siswa mengenali dan mengembangkan potensinya.</li>
            <li>Menerapkan manajemen partisipatif yang melibatkan semua pihak.</li>
            <li>Menumbuhkan penghayatan ajaran agama dan budaya bangsa.</li>
            <li>Membiasakan berlaku santun dan menghargai pendapat.</li>
          </ul>
        </div>
      </div>
  
      <!-- Nilai-Nilai Organisasi -->
      <div class="text-center mb-10">
        <h3 class="text-2xl font-semibold mb-4">Nilai-Nilai Organisasi</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <div class="p-6 bg-gray-50 rounded shadow text-center">
              <div class="flex justify-center mb-3">
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path d="M12 6v6l4 2"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6l4 2m8 5H4a2 2 0 01-2-2V5a2 2 0 012-2h16a2 2 0 012 2v12a2 2 0 01-2 2z" />
                </svg>
              </div>
              <h4 class="font-bold mb-2">Kedisiplinan</h4>
              <p class="text-gray-600">Datang tepat waktu, menaati peraturan sekolah, melaksanakan tugas dengan baik, mengembangkan diri.</p>
            </div>
          
            <div class="p-6 bg-gray-50 rounded shadow text-center">
              <div class="flex justify-center mb-3">
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4 0v6m0-6a4 4 0 100-8 4 4 0 000 8z" />
                </svg>
              </div>
              <h4 class="font-bold mb-2">Kebersamaan</h4>
              <p class="text-gray-600">Kerja kelompok, menjaga kebersihan, menyelesaikan masalah bersama, melibatkan teman.</p>
            </div>
          
            <div class="p-6 bg-gray-50 rounded shadow text-center">
              <div class="flex justify-center mb-3">
                <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <h4 class="font-bold mb-2">Kekeluargaan</h4>
              <p class="text-gray-600">Menjenguk yang sakit, saling membantu, menyayangi dan menghormati.</p>
            </div>
          
            <div class="p-6 bg-gray-50 rounded shadow text-center">
              <div class="flex justify-center mb-3">
                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 10h11l-1.5 4.5a1 1 0 01-1 .5H6a1 1 0 01-1-.5L3 10z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 10V4a1 1 0 011-1h4a1 1 0 011 1v6" />
                </svg>
              </div>
              <h4 class="font-bold mb-2">Gotong Royong</h4>
              <p class="text-gray-600">Kerja bakti membersihkan lingkungan sekolah, membuat mading bersama.</p>
            </div>
          
            <div class="p-6 bg-gray-50 rounded shadow text-center">
              <div class="flex justify-center mb-3">
                <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13 16h-1v-4h-1m1 4h.01M21 12.79A9 9 0 1012 21a9 9 0 009-8.21z" />
                </svg>
              </div>
              <h4 class="font-bold mb-2">Sosial</h4>
              <p class="text-gray-600">Berpakaian sopan, menghormati orang tua, karakter positif, peduli sesama.</p>
            </div>
          
            <div class="p-6 bg-gray-50 rounded shadow text-center">
              <div class="flex justify-center mb-3">
                <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 4v4m0 0V4m0 4a4 4 0 11-4 4m4-4a4 4 0 104 4m-8 0a8 8 0 1016 0 8 8 0 00-16 0z" />
                </svg>
              </div>
              <h4 class="font-bold mb-2">Religius</h4>
              <p class="text-gray-600">Beribadah dengan tenang, menghargai perbedaan kepercayaan.</p>
            </div>
          </div>
          
      </div>
  
      <!-- Tujuan Sekolah -->
      <div class="bg-blue-50 p-6 rounded-lg mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-center">Tujuan Sekolah</h3>
        <p class="text-gray-700 text-center">Menyelenggarakan pendidikan yang berkualitas dan profesional dengan dasar iman, akhlak mulia, dan keterampilan unggul.</p>
      </div>
  
      <!-- Prestasi Sekolah -->
      <div>
        <h3 class="text-2xl font-semibold mb-6 text-center">Prestasi Sekolah</h3>
        <div class="grid md:grid-cols-3 gap-6">
          @foreach ([
            ['tahun' => 2018, 'judul' => 'Seni Tilawah Qur\'an', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 2'],
            ['tahun' => 2018, 'judul' => 'Poster Putri (Pramuka)', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 2'],
            ['tahun' => 2019, 'judul' => 'Taekwondo', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 2'],
            ['tahun' => 2019, 'judul' => 'Karate (Popda)', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 1'],
            ['tahun' => 2019, 'judul' => 'Voli', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 2'],
            ['tahun' => 2019, 'judul' => 'Lari Estafet (5x80m)', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 1'],
            ['tahun' => 2019, 'judul' => 'Lari Estafet (5x80m)', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 3'],
            ['tahun' => 2020, 'judul' => 'Atletik Lompat Jauh Puteri', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 1'],
            ['tahun' => 2020, 'judul' => 'Atletik Lari 80m Puteri', 'tingkat' => 'Kecamatan', 'juara' => 'Juara 3'],
            ['tahun' => 2020, 'judul' => 'Poomsae', 'tingkat' => 'Kota/Kabupaten', 'juara' => 'Juara 2'],
          ] as $prestasi)
          <div class="p-4 bg-gray-100 rounded shadow">
            <p class="text-sm text-blue-600 font-semibold">{{ $prestasi['juara'] }} - {{ $prestasi['tingkat'] }}</p>
            <h4 class="text-lg font-bold text-gray-800">{{ $prestasi['judul'] }}</h4>
            <p class="text-sm text-gray-500">Tahun {{ $prestasi['tahun'] }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  

@endsection