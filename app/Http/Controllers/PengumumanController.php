<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumumans = [
            [
                'kategori' => 'Libur Sekolah',
                'judul' => 'Libur Semester Genap Dimulai 10 Juni 2025',
                'tanggal' => '2025-06-01',
                'konten' => 'Siswa libur selama dua minggu dan kembali masuk pada 24 Juni 2025.'
            ],
            [
                'kategori' => 'Penerimaan Siswa Baru',
                'judul' => 'Pendaftaran Siswa Baru Tahun Ajaran 2025/2026 Telah Dibuka',
                'tanggal' => '2025-05-15',
                'konten' => 'Orang tua dapat mendaftarkan putra-putrinya langsung ke sekolah atau secara online.'
            ],
            [
                'kategori' => 'Ujian Akhir',
                'judul' => 'Jadwal Ujian Akhir Semester Genap',
                'tanggal' => '2025-06-05',
                'konten' => 'Ujian akan dilaksanakan mulai 6 Juni hingga 10 Juni 2025.'
            ],
        ];


        return view('pages.pengumuman', compact('pengumumans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
