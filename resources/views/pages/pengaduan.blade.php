@extends('app')
@section('title', 'Pengaduan | SDN Bringin 01')

@section('content')
    <section class="bg-gray-50 min-h-screen py-12 px-4">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-8">
                Pengaduan bisa dilakukan dengan mengisi FORM di bawah ini
            </h2>

            <form action="{{ route('pengaduan.store') }}" method="POST" class="space-y-6">
                @csrf

                @if (session('success'))
                    <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif


                <div>
                    <label for="nama" class="block mb-2 text-sm font-semibold text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap Anda"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Surel</label>
                    <input type="email" name="email" id="email" placeholder="Masukkan alamat email Anda"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label for="telepon" class="block mb-2 text-sm font-semibold text-gray-700">Nomor Kontak</label>
                    <input type="text" name="telepon" id="telepon" placeholder="Masukkan nomor telepon aktif"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label for="deskripsi" class="block mb-2 text-sm font-semibold text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="5" placeholder="Tuliskan deskripsi pengaduan Anda"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>

                <div class="text-right">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md shadow-md transition duration-300">
                        Kirim Pengaduan
                    </button>
                </div>
            </form>
        </div>
    </section>

    <script>
        setTimeout(() => document.getElementById('alert')?.remove(), 5000);
    </script>
@endsection
