<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lombas = Lomba::all();
        return view('admin.lomba.index', compact('lombas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lomba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lomba' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tingkat' => 'required|string|max:255',
            'prestasi' => 'nullable|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Lomba::create([
            'admin_id' => Auth::user()->id,
            'nama_lomba' => $request->nama_lomba,
            'kategori' => $request->kategori,
            'tingkat' => $request->tingkat,
            'prestasi' => $request->prestasi,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar') ? $request->file('gambar')->store('lomba', 'public') : null,
        ]);

        return redirect()->route('admin.lomba.index')->with('success', 'Lomba created successfully.');
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
        $lomba = Lomba::findOrFail($id);
        return view('admin.lomba.edit', compact('lomba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'nama_lomba' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tingkat' => 'required|string|max:100',
            'prestasi' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ]);

        // Ambil data lomba berdasarkan ID
        $lomba = Lomba::findOrFail($id);

        // Ambil semua input kecuali gambar
        $data = $request->only([
            'nama_lomba',
            'kategori',
            'tingkat',
            'prestasi',
            'tanggal',
            'deskripsi',
        ]);

        // Handle upload gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($lomba->gambar && Storage::disk('public')->exists($lomba->gambar)) {
                Storage::disk('public')->delete($lomba->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar')->store('lomba', 'public');
            $data['gambar'] = $path;
        }

        // Update data lomba
        $lomba->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.lomba.index')->with('success', 'Data lomba berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lomba = Lomba::findOrFail($id);

        // Hapus gambar jika ada
        if ($lomba->gambar && Storage::disk('public')->exists($lomba->gambar)) {
            Storage::disk('public')->delete($lomba->gambar);
        }

        // Hapus data lomba
        $lomba->delete();

        return redirect()->route('admin.lomba.index')->with('success', 'Lomba deleted successfully.');
    }
}
