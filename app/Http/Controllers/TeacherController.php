<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all()->groupBy('kategori');
        return view('admin.guru.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'kelas' => 'nullable|string',
            'mapel' => 'nullable|string',
            'kategori' => 'nullable|string',
            'foto' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('guru', 'public');        }

        Teacher::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.guru.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string',
            'kelas' => 'nullable|string',
            'mapel' => 'nullable|string',
            'kategori' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($teacher->foto && Storage::exists($teacher->foto)) {
                Storage::delete($teacher->foto);
            }

            $validated['foto'] = $request->file('foto')->store('guru');
        }

        $teacher->update($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        // Hapus foto jika ada
        if ($teacher->foto && Storage::exists($teacher->foto)) {
            Storage::delete($teacher->foto);
        }

        $teacher->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}
