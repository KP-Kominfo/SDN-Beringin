@extends('app') {{-- Assuming 'app' is your main layout --}}

@section('content')
<div class="bg-gray-50 py-12">
    <section class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6 md:p-8">

            {{-- Main Image / Placeholder --}}
            <div class="mb-6 rounded-lg overflow-hidden bg-gray-100 flex items-center justify-center" style="min-height: 250px;">
                @if ($berita->foto)
                    <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="w-full h-auto object-cover max-h-96">
                @else
                    <div class="text-gray-400 text-center py-12">
                        <i class="fas fa-image text-6xl mb-4"></i>
                        <p class="text-xl">Foto Berita Tidak Tersedia</p>
                    </div>
                @endif
            </div>

            {{-- Date and Author --}}
            <div class="text-sm text-gray-500 mb-4 flex items-center space-x-3">
                <i class="fas fa-calendar-alt"></i>
                <span>{{ $berita->created_at->translatedFormat('d F Y') }}</span> {{-- Uses translatedFormat for Indonesian month names --}}
                <span class="text-gray-400">&bull;</span>
                <i class="fas fa-user-circle"></i>
                <span>{{ $berita->admin->name ?? 'Admin Sekolah' }}</span> {{-- Assuming a relation to User model --}}
            </div>

            {{-- Title --}}
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                {{ $berita->judul }}
            </h1>

            {{-- Content --}}
            <div class="prose prose-blue max-w-none text-gray-800 leading-relaxed text-lg">
                {{-- If your 'konten' field contains HTML, use {!! !!} --}}
                {!! $berita->konten !!} 
                {{-- If 'konten' is plain text, use {{ }} and add line breaks --}}
                {{-- {{ nl2br($berita->konten) }} --}}
            </div>

            {{-- Social Share Section --}}
            <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-3">
                    <span class="font-semibold">Bagikan:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="text-blue-600 hover:text-blue-800 transition-colors">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($berita->judul) }}" target="_blank" class="text-blue-400 hover:text-blue-600 transition-colors">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($berita->judul . ' ' . url()->current()) }}" target="_blank" class="text-green-500 hover:text-green-700 transition-colors">
                        <i class="fab fa-whatsapp text-lg"></i>
                    </a>
                    {{-- Add more social media icons as needed --}}
                </div>
                
                {{-- Back to News Link --}}
                <a href="{{ route('berita.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                    <i class="fas fa-arrow-left mr-2 text-sm"></i>
                    Kembali ke Berita
                </a>
            </div>

        </div>
    </section>
</div>
@endsection