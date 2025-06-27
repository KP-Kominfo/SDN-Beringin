<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
   
    public function create()
    {
        return view('pages.pengaduan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telepon' => 'required|string|max:20',
            'deskripsi' => 'required|string',
        ]);

        Pengaduan::create($request->all());

        return redirect()->route('pengaduan.form')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
