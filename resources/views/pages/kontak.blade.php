@extends('app')

@section('title', 'Kontak | SDN Bringin 01')


@section('content')
<section class="bg-gray-50 py-12">
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-700 mb-12 relative">
                KONTAK KAMI
                <span class="block w-20 h-1 bg-blue-500 mx-auto mt-2 rounded"></span>
            </h2>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Alamat -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <img src="{{ asset($kontakData['alamat']['icon']) }}" class="mx-auto w-12 h-12 mb-4" alt="Alamat">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $kontakData['alamat']['judul'] }}</h3>
                    <p class="text-gray-600">{!! $kontakData['alamat']['deskripsi'] !!}</p>
                </div>
    
                <!-- Customer Service -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <img src="{{ asset($kontakData['cs']['icon']) }}" class="mx-auto w-12 h-12 mb-4" alt="CS">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $kontakData['cs']['judul'] }}</h3>
                    <p class="text-gray-600"><strong>Email:</strong> {{ $kontakData['cs']['email'] }}</p>
                    <p class="text-gray-600"><strong>Telp:</strong> {{ $kontakData['cs']['telp'] }}</p>
                    <p class="text-gray-600"><strong>Fax:</strong> {{ $kontakData['cs']['fax'] }}</p>
                </div>
    
                <!-- Jam Kerja -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <img src="{{ asset($kontakData['jam']['icon']) }}" class="mx-auto w-12 h-12 mb-4" alt="Jam Kerja">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $kontakData['jam']['judul'] }}</h3>
                    @foreach ($kontakData['jam']['jadwal'] as $item)
                        <p class="text-gray-600">{{ $item }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    

@endsection