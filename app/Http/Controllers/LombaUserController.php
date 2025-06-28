<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;

class LombaUserController extends Controller
{
    // public function index(Request $request)
    // {
    //     $kategori = $request->get('kategori');
    //     $query = Lomba::with('peserta');

    //     if ($kategori) {
    //         $query->where('kategori', $kategori);
    //     }

    //     $lombas = $query->get();
    //     return view('pages.lomba', compact('lombas', 'kategori'));
    // }

    public function mapsi()
    {
        $lombas = Lomba::where('kategori', 'MAPSI')->latest()->get();
        return view('pages.lomba.mapsi', compact('lombas'));
    }

    public function literasi()
    {
        $lombas = Lomba::where('kategori', 'Literasi')->latest()->get();
        return view('pages.lomba.literasi', compact('lombas'));
    }

    public function fls2n()
    {
        $lombas = Lomba::where('kategori', 'FLS2N')->latest()->get();
        return view('pages.lomba.fls2n', compact('lombas'));
    }

    public function bahasaJawa()
    {
        $lombas = Lomba::where('kategori', 'Bahasa Jawa')->latest()->get();
        return view('pages.lomba.bahasa-jawa', compact('lombas'));
    }

    public function berprestasi()
    {
        $lombas = Lomba::where('kategori', 'Siswa Berprestasi')->latest()->get();
        return view('pages.lomba.berprestasi', compact('lombas'));
    }

    public function motivasi()
    {
        $lombas = Lomba::where('kategori', 'Motivasi & Inspiratif')->latest()->get();
        return view('pages.lomba.motivasi', compact('lombas'));
    }
}
