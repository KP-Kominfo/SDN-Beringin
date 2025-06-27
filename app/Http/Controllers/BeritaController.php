<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|max:2048',
            'konten' => 'required|string',
        ]);

        $path = $request->file('foto')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'foto' => $path,
            'konten' => $request->konten,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
            'konten' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($berita->foto);
            $path = $request->file('foto')->store('berita', 'public');
            $berita->foto = $path;
        }

        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        Storage::disk('public')->delete($berita->foto);
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
