<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $carouselTopSlides = [
            [
                'image' => 'images/image1.jpg',
                'alt' => 'Slide 1',
                'title' => 'Selamat Datang di SDN Bringin 01',
                'desc' => 'Mewujudkan generasi cerdas, kreatif, dan berkarakter.',
                'cta' => ['href' => '/profil', 'text' => 'Lihat Profil Sekolah']
            ],
            [
                'image' => 'images/image2.jpg',
                'alt' => 'Slide 2',
                'title' => 'Pendidikan Berkualitas',
                'desc' => 'Fasilitas dan guru yang kompeten mendukung pembelajaran.',
                'cta' => ['href' => '/fasilitas', 'text' => 'Lihat Fasilitas']
            ],
        ];

        $carouselBottomSlides = [
            [
                'image' => 'images/kabar4.jpg',
                'alt' => 'Slide 1',
                'title' => 'TIM PASKIBRA SD NEGERI BERINGIN 01 TAHUN 2019',
                'desc' => 'Tim Paskibra SD Negeri Beringin 01 Tahun 2019 Berfoto Bersama Setelah Melaksanakan Tugas.',
            ],
            [
                'image' => 'images/kabar1.jpg',
                'alt' => 'Slide 2',
                'title' => 'PERINGATAN HARI KARTINI TAHUN 2018',
                'desc' => 'SD Negeri Beringin Memperingati Hari Kartini Dengan Semarak.',
            ],
            [
                'image' => 'images/kabar2.jpg',
                'alt' => 'Slide 3',
                'title' => 'SERAGAM LURIK SD NEGERI BERINGIN 01',
                'desc' => 'Pendidik dan Tenaga Kerja Kependidikan SD Negeri Beringin 01 Berfoto Bersama Menggunakan Seragam Lurik.',
            ],
            [
                'image' => 'images/kabar3.jpg',
                'alt' => 'Slide 4',
                'title' => 'KARNAVAL KOTA SEMARANG TAHUN 2018',
                'desc' => 'SD Negeri Beringin 01 Ikut Serta Dalam Karnaval yang Diselenggarakan Pemerintah Kota Semarang Tahun 2018.',
            ],
        ];

        return view('pages.dashboard', [
            'carouselTopSlides' => $carouselTopSlides,
            'carouselBottomSlides' => $carouselBottomSlides,
        ]);
    }
}
