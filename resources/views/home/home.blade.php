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
        <div class="mb-10">
          <h1 class="text-2xl md:text-4xl font-bold text-center text-gray-800">
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
          <div class="bg-slate-100 border border-gray-400 p-6 rounded-lg shadow-md text-gray-800 text-justify  leading-relaxed space-y-4">
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
