@extends('app')

@section('content')
    <section class="relative">
        {{-- Carousel wrapper --}}
        <div id="carousel" class="relative overflow-hidden w-full h-[calc(100dvh-98px)] sm:h-[calc(100dvh-154px)] ">
            {{-- Slide 1 --}}
            <div class="carousel-item absolute inset-0 transition-opacity duration-1000 opacity-100 z-10">
                <img src="{{ asset('images/image1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1">
                <div
                    class="absolute inset-0 bg-black/35 flex flex-col items-center justify-center text-white text-center px-4">
                    <h2 class="text-2xl md:text-4xl font-bold mb-4">Selamat Datang di SDN Bringin 01</h2>
                    <p class="mb-4">Mewujudkan generasi cerdas, kreatif, dan berkarakter.</p>
                    <a href="/profil" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Lihat
                        Profil Sekolah</a>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="carousel-item absolute inset-0 transition-opacity duration-1000 opacity-0 z-0">
                <img src="{{ asset('images/image2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2">
                <div
                    class="absolute inset-0 bg-black/35 flex flex-col items-center justify-center text-white text-center px-4">
                    <h2 class="text-2xl md:text-4xl font-bold mb-4">Pendidikan Berkualitas</h2>
                    <p class="mb-4">Fasilitas dan guru yang kompeten mendukung pembelajaran.</p>
                    <a href="/fasilitas"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Lihat Fasilitas</a>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="mb-10 mx-auto text-center">
          <h1 class="text-2xl md:text-4xl font-bold  text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
            Sambutan Kepala Sekolah
          </h1>
        </div>
      
        <div class="flex flex-col md:flex-row items-center gap-12">
          <!-- Foto Kepala Sekolah -->
          <div class="w-[300px] h-[300px] sm:w-full sm:max-h-[500px] rounded-full overflow-hidden shadow-lg ring-1 ring-gray-300 transition-transform hover:scale-105 duration-300">
            <img
              class="w-full h-full object-cover object-center"
              src="{{ asset('images/kepsek.jpeg') }}"
              alt="Kepala Sekolah SDN Bringin 01"
            />
          </div>
          
          
      
          <!-- Sambutan -->
          <div class="bg-gray-100 border border-gray-200 p-6 rounded-lg shadow-md text-gray-800 text-justify  leading-relaxed space-y-4">
            <p>
              Assalamualaikum warohmatullahi wabarokatuh.
              <br><br>
              Salam sehat, salam semangat untuk kita semua.
              Puji syukur kami panjatkan ke hadirat Allah Swt atas segala limpahan rahmat dan karunia-Nya, sehingga SD NEGERI BRINGIN 01 berhasil membangun website sekolah ini.
              Kehadiran website diharapkan dapat memudahkan penyampaian informasi secara terbuka kepada warga sekolah, alumni, masyarakat, serta instansi terkait.
              Semoga melalui platform ini, komunikasi dapat terjalin lebih cepat dan efektif, sehingga semua pihak bisa mengikuti perkembangan SD NEGERI BRINGIN 01 Kecamatan Ngaliyan, Kota Semarang.
            </p>
            <p>
              Di era global dan pesatnya teknologi informasi, keberadaan website sangat penting. Website dapat menjadi media penyebarluasan informasi kepada stakeholder secara luas, sekaligus sebagai sarana promosi sekolah yang efektif.
              Oleh karena itu, kami berharap melalui website ini, SD NEGERI BRINGIN 01 dapat berkembang menjadi lebih maju dan solid.
              <br><br>
              Terima kasih.
              <br><br>
              Wassalamualaikum warohmatullahi wabarokatuh.
            </p>
      
            <div class="mt-6">
              <p class="font-semibold">Kepala SDN Bringin 01</p>
              <p>Muh Hasan Rifai, S.Pd.I, M.Pd</p>
              <p class="text-sm text-gray-600">NIP: 19790507 200801 1 015</p>
            </div>
          </div>
        </div>
      </section>

      {{-- sejarah sd --}}

      <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="mb-10 mx-auto text-center">
          <h1 class="text-2xl md:text-4xl font-bold text-center text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
            Sejarah SDN Bringin 01
          </h1>
        </div>
      
        <div class="flex flex-col md:flex-row gap-8">
          <!-- Kolom Kiri -->
          <div class="bg-gray-100 p-6 border border-gray-200 rounded-lg shadow-md text-gray-800 text-justify leading-relaxed space-y-4 flex-1">
            <p>
              Secara administrasi SD NEGERI BRINGIN 01 beralamat di Jalan Raya Gondoriyo, Kelurahan Bringin, Kecamatan Ngaliyan, Kota Semarang, Provinsi Jawa Tengah. Kode POS 50189. Dengan posisi geografis Lintang : -7 Bujur : 110
            </p>
            <p>
              SD NEGERI BRINGIN 01 memiliki luas lahan 1.500 M², dengan batas-batas: Utara - Kelurahan Bringin, Timur - Kelurahan Kedungpane, Selatan - Kelurahan Wates, Barat - Kelurahan Gondoriyo.
            </p>
            <p>
              Jarak tempuh ±15 menit dari Balaikota Semarang, SD ini terdiri dari 3 bangunan utama: 7 ruang kelas, 1 ruang kepala sekolah, 1 ruang guru, 1 ruang UKS, serta kantin dan toilet di bagian belakang.
            </p>
            <p>
              SD NEGERI BRINGIN 01 berdiri pada 1 Januari 1979 melalui SK Pendirian No. 421.2/001/VI/32/85 dan SK Izin Operasional No. 421.2/04571/98 tanggal 24 Juli 1998. Informasi lengkap dapat dilihat di situs Data Pokok Pendidikan Kemendikbud.
            </p>
      
            <div class="pt-4">
              <p class="font-semibold">Kepala SDN Bringin 01</p>
              <p>Muh Hasan Rifai, S.Pd.I, M.Pd</p>
              <p class="text-sm text-gray-600">NIP: 19790507 200801 1 015</p>
            </div>
          </div>
      
          <!-- Kolom Kanan -->
          <div class="flex-1 space-y-4 my-auto">
            <!-- Gambar Gedung -->
            <div class="w-full h-[300px] rounded-md overflow-hidden shadow-md">
              <img
                src="{{ asset('images/sejarah2.webp') }}"
                alt="Foto Sekolah"
                class="w-full h-full object-cover object-center"
              />
            </div>
          
            <!-- Box Informasi Visual -->
            <div class="flex gap-4">
              <div class="bg-gray-200 rounded-md h-[100px] w-1/2 flex items-center justify-center text-gray-600 shadow-sm">
            
              </div>
              <div class="bg-gray-200 rounded-md h-[100px] w-1/2 flex items-center justify-center text-gray-600 shadow-sm">

              </div>
            </div>
          
            <!-- Kutipan -->
            <div class="bg-gray-100 rounded-md p-4 text-sm italic text-gray-700 shadow-sm border-l-4 border-gray-400">
              “SD NEGERI BRINGIN 01, BISA!!, "BERSIH, INDAH, SEHAT DAN ASRI”<br />
              <span class="font-semibold text-gray-600">– SDN Bringin 01</span>
            </div>
          </div>
          
        </div>
      </section>
      
      
@endsection


@section('scripts')
    <script>
        // Simple JavaScript Carousel
        const slides = document.querySelectorAll('.carousel-item');
        let current = 0;

        setInterval(() => {
            slides[current].classList.remove('opacity-100', 'z-10');
            slides[current].classList.add('opacity-0', 'z-0');

            current = (current + 1) % slides.length;

            slides[current].classList.remove('opacity-0', 'z-0');
            slides[current].classList.add('opacity-100', 'z-10');
        }, 5000); // 5 detik per slide
    </script>
@endsection
