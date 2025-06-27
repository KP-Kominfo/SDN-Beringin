<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontakData = [
            'alamat' => [
                'icon' => 'images/location.jpg',
                'judul' => 'ALAMAT',
                'deskripsi' => 'Jl. Raya Gondoriyo, Bringin, Kec. Ngaliyan,<br>Kota Semarang, Jawa Tengah'
            ],
            'cs' => [
                'icon' => 'images/cs.png',
                'judul' => 'CUSTOMER SERVICE',
                'email' => 'sdbringin01@gmail.com',
                'telp' => '024-76631105',
                'fax'  => '024-76631105'
            ],
            'jam' => [
                'icon' => 'images/clock.png',
                'judul' => 'JAM KERJA',
                'jadwal' => [
                    'Senin - Kamis: 07.00 - 14.00 WIB',
                    'Jumat: 07.00 - 11.30 WIB',
                    'Sabtu: 07.00 - 12.30 WIB',
                ]
            ]
        ];

        return view('pages.kontak', compact('kontakData'));
    }
}
