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

        $request->merge([
            'nama_peserta' => array_filter($request->input('nama_peserta'), function ($value) {
                return trim($value) !== '';
            })
        ]);

         $validated = $request->validate([
            'nama_lomba' => 'required|string',
            'tingkat' => 'required|string',
            'prestasi' => 'required|string',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'required|string',
            'nama_peserta' => 'required|array|min:1',
        ]);
    
        // Bersihkan nama peserta dan simpan dalam format JSON
        // $validated['nama_peserta'] = json_encode(array_filter($validated['nama_peserta']));
    
        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('lomba', 'public');
        }
    
        // Tambahkan ID admin ke dalam data yang akan disimpan
        $validated['admin_id'] = Auth::id();

        // Simpan ke database
        Lomba::create([
            'admin_id' => Auth::id(),
            'nama_lomba' => $validated['nama_lomba'],
            'tingkat' => $validated['tingkat'],
            'prestasi' => $validated['prestasi'],
            'tanggal' => $validated['tanggal'],
            'deskripsi' => $validated['deskripsi'],
            'gambar' => $validated['gambar'] ?? null,
            'kategori' => $validated['kategori'],
            'nama_peserta' => $validated['nama_peserta'], 
        ]);

        return redirect()->route('admin.lomba.index')->with('success', 'Data berhasil disimpan.');
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

        $request->merge([
            'nama_peserta' => array_filter($request->input('nama_peserta'), function ($value) {
                return trim($value) !== '';
            })
        ]);

        // Validasi input
        $request->validate([
            'nama_lomba' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tingkat' => 'required|string|max:100',
            'prestasi' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
            'nama_peserta' => 'required|array|min:1',
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
            'nama_peserta',
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
