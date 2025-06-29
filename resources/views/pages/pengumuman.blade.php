@extends('app')

@section('content')
    <div class="bg-gray-50 py-12">
        <section class="container mx-auto px-4">
            <div class="flex justify-center mb-4">

                <h2
                    class="text-2xl md:text-4xl font-bold text-center text-gray-800 border-b-2 border-gray-300 inline-block pb-2">
                    Pengumuman Sekolah</h2>
            </div>
            <p class="text-center text-gray-600 mb-6">Informasi penting dan pemberitahuan resmi dari SD Bringin</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($pengumumans as $item)
                    <div class="rounded-lg shadow p-4 bg-white">
                        <div class="bg-yellow-100 text-yellow-800 p-3 rounded mb-3 font-semibold">{{ $item['kategori'] }}
                        </div>
                        <h3 class="font-bold text-lg mb-1">{{ $item['judul'] }}</h3>
                        <p class="text-sm text-gray-500 mb-3">{{ \Carbon\Carbon::parse($item['tanggal'])->format('d F Y') }}
                        </p>
                        <p class="text-sm text-gray-600">{{ $item['konten'] }}</p>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-500">
                        Tidak ada pengumuman tersedia saat ini.
                    </div>
                @endforelse
            </div>
        </section>
    </div>
@endsection
