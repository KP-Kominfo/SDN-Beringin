@extends('app')

@section('content')
<section class="relative">
  {{-- Carousel wrapper --}}
  <div id="carousel" class="relative overflow-hidden w-full h-[calc(100dvh-98px)] sm:h-[calc(100dvh-154px)] ">
      {{-- Slide 1 --}}
      <div class="carousel-item absolute inset-0 transition-opacity duration-1000 opacity-100 z-10">
          <img src="{{ asset('images/image1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1">
          <div class="absolute inset-0 bg-black/35 flex flex-col items-center justify-center text-white text-center px-4">
              <h2 class="text-2xl md:text-4xl font-bold mb-4">Selamat Datang di SDN Bringin 01</h2>
              <p class="mb-4">Mewujudkan generasi cerdas, kreatif, dan berkarakter.</p>
              <a href="/profil" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Lihat Profil Sekolah</a>
          </div>
      </div>

      {{-- Slide 2 --}}
      <div class="carousel-item absolute inset-0 transition-opacity duration-1000 opacity-0 z-0">
          <img src="{{ asset('images/image2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2">
          <div class="absolute inset-0 bg-black/35 flex flex-col items-center justify-center text-white text-center px-4">
              <h2 class="text-2xl md:text-4xl font-bold mb-4">Pendidikan Berkualitas</h2>
              <p class="mb-4">Fasilitas dan guru yang kompeten mendukung pembelajaran.</p>
              <a href="/fasilitas" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Lihat Fasilitas</a>
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