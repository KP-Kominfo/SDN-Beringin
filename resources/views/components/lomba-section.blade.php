@props(['kategori', 'items'])

<div class="bg-gray-50 py-12">
   

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($items as $item)
                <div class="rounded-lg shadow p-4 bg-white flex flex-col h-full">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                             alt="{{ $item->nama_lomba }}"
                             class="w-full h-48 object-cover rounded mb-4">
                    @endif

                    <div class="bg-blue-50 text-blue-800 p-2 rounded mb-2 text-sm font-semibold text-center">
                        {{ $item->nama_lomba }}
                    </div>

                    <h3 class="font-bold text-lg text-gray-800 mb-1">{{ $item->tingkat }}</h3>
                    <p class="text-sm text-gray-500 mb-2">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }} • <strong>{{ $item->prestasi }}</strong>
                    </p>

                    @if ($item->deskripsi)
                        <p class="text-sm text-gray-700 mb-2">{{ $item->deskripsi }}</p>
                    @endif

                    @if (!empty($item->nama_peserta))
                    @php
                        $pesertas = is_string($item->nama_peserta)
                            ? json_decode($item->nama_peserta, true)
                            : $item->nama_peserta;
                    @endphp
                
                    @if (is_array($pesertas))
                        <div class="mt-2">
                            <p class="text-sm font-medium text-gray-700">Peserta:</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-1">
                                @foreach ($pesertas as $peserta)
                                    <li>{{ $peserta }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endif
                
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">
                    Tidak ada data lomba untuk kategori ini.
                </div>
            @endforelse
        </div>
</div>
