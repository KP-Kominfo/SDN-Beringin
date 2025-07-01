<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

class PengaduanController extends Controller
{

    public function index()
    {
        $pengaduans = Pengaduan::latest()->get();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }
   
    public function create()
    {
        return view('pages.pengaduan');
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
        'nama' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email'],
        'telepon' => ['required', 'string', 'max:20'],
        'pesan' => ['required', 'string', 'max:2000'],
    ]);

    // Bersihkan dari script dan tag HTML
    foreach ($validated as $key => $value) {
        $validated[$key] = Purifier::clean($value);
    }

    // Cek apakah input masih mengandung tag mencurigakan (script)
    foreach ($validated as $key => $value) {
        if (preg_match('/<[^>]*script[^>]*>/i', $value)) {
            return back()->withErrors([$key => 'Input tidak valid'])->withInput();
        }
    }

    // Simpan data
    Pengaduan::create($validated);

    return back()->with('success', 'Pengaduan Anda telah dikirim.');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }
}