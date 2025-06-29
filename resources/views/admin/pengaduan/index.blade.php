<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pengaduan') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
        <div class="bg-white p-6 shadow sm:rounded-lg">
          <section>
            <header class="mb-6">
              <h2 class="text-lg font-medium text-gray-900">Daftar Pengaduan</h2>
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
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Telepon</th>
                    <th class="px-4 py-2">pesan</th>
                    <th class="px-4 py-2">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                  @forelse ($pengaduans as $pengaduan)
                    <tr>
                      <td class="px-4 py-2">{{ $pengaduan->id }}</td>
                      <td class="px-4 py-2">{{ $pengaduan->nama }}</td>
                      <td class="px-4 py-2">{{ $pengaduan->email }}</td>
                      <td class="px-4 py-2">{{ $pengaduan->telepon }}</td>
                      <td class="px-4 py-2">{{ $pengaduan->pesan }}</td>
                      <td class="px-4 py-2 flex space-x-2">
                        <form action="{{ route('admin.pengaduan.destroy', $pengaduan->id) }}" method="POST"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                            class="inline-block px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">Hapus</button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6" class="text-center px-4 py-3 text-gray-500">Belum ada pengaduan masuk</td>
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
  