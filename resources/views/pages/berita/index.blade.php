@extends('app')

@section('title', 'Berita | SDN Bringin 01')


@section('content')
<div class="bg-gray-50 py-12">
    <section class="container mx-auto px-4">
        <div class="flex justify-center mb-4">

            <h2
                class="text-2xl md:text-4xl font-bold text-center text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
                Berita Sekolah</h2>
        </div>
        <p class="text-center text-gray-600 mb-6">Ikuti perkembangan terbaru dan kegiatan menarik di SD Bringin</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($beritas as $berita)
                <a href="{{ route('berita.detail.show', $berita->id) }}">
                    <div class="rounded-lg shadow-lg p-4 bg-white overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    {{-- Optional: Display image if available --}}
                    @if ($berita->foto)
                        <div class="mb-3 rounded-md overflow-hidden">
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="w-full h-48 object-cover">
                        </div>
                    @else
                        {{-- Placeholder if no image --}}
                        <div class="bg-gray-200 h-48 flex items-center justify-center text-gray-500 rounded-md mb-3">
                            <i class="fas fa-image text-4xl"></i>
                        </div>
                    @endif

                    <h3 class="font-bold text-lg mb-1 text-gray-900">{{ $berita->judul }}</h3>
                    <p class="text-sm text-gray-500 mb-3">{{ $berita->created_at->format('d F Y') }}</p>
                    <p class="text-sm text-gray-600 mb-4">{{ Str::limit($berita->konten, 150) }}</p> 
                </div>
                </a>
            @empty
                <div class="md:col-span-3 text-center p-8 bg-white rounded-lg shadow-lg">
                    <p class="text-gray-600 text-lg">Belum ada berita yang tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection