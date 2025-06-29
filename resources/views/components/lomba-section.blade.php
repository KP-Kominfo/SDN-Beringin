@props(['kategori', 'items'])

<div class="bg-gray-50 py-12">
    <section class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($items as $item)
                <div class="rounded-lg shadow p-4 bg-white">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                             alt="{{ $item->nama_lomba }}"
                             class="w-full h-48 object-cover rounded mb-3">
                    @endif

                    <div class="bg-gray-100 p-3 rounded mb-3 font-semibold">
                        {{ $item->nama_lomba }}
                    </div>

                    <h3 class="font-bold text-lg">{{ $item->tingkat }}</h3>
                    <p class="text-sm text-gray-500 mb-2">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }} • {{ $item->prestasi }}
                    </p>

                    @if ($item->deskripsi)
                        <p class="text-sm text-gray-700">{{ $item->deskripsi }}</p>
                    @endif
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">
                    Tidak ada data lomba untuk kategori ini.
                </div>
            @endforelse
        </div>
    </section>
</div>
