<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <section>
                    <header class="mb-6 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">
                            Admin Berita
                        </h2>

                        <div>
                            <a href="{{ route('admin.berita.create') }}"
                                class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Tambah Berita
                            </a>
                        </div>
                    </header>

                    @if (session('success'))
                        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto mt-6">
                        <table class="min-w-full divide-y divide-gray-200 rounded-lg">
                            <thead class="bg-gray-100 text-left text-sm font-medium text-gray-700">
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Judul Berita</th>
                                    <th class="px-4 py-2">Foto</th>
                                    <th class="px-4 py-2">Konten (Ringkasan)</th>
                                    <th class="px-4 py-2">Tanggal Publikasi</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 text-sm">
                                @forelse ($beritas as $berita)
                                    <tr>
                                        <td class="px-4 py-2">{{ $berita->id }}</td>
                                        <td class="px-4 py-2">{{ $berita->judul }}</td>
                                        <td class="px-4 py-2">
                                            @if ($berita->foto)
                                                <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="w-16 h-16 object-cover rounded">
                                            @else
                                                Tidak Ada Foto
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">
                                            {{ Str::limit($berita->konten, 100) }} {{-- Show first 100 characters --}}
                                        </td>
                                        <td class="px-4 py-2">
                                            {{ $berita->created_at->format('d M Y') }} {{-- Or any desired format --}}
                                        </td>
                                        <td class="px-4 py-2 flex space-x-2">
                                            <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                                class="inline-block px-3 py-1 text-sm text-white bg-amber-600 rounded hover:bg-amber-700">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-block px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center px-4 py-3 text-gray-500">Data Berita Tidak Tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>