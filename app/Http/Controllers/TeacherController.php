<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
   public function index()
    {
        $teachers = Teacher::all()->groupBy('kategori');
        return view('profil.guru.index', compact('teachers'));
    }

    public function create()
    {
        return view('profil.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'nip' => 'nullable|string',
            'jabatan' => 'nullable|string',
            'foto' => 'nullable|image',
            'keterangan' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('guru');
        }

        Teacher::create($validated);
        return redirect()->route('profil-guru.index');
    }
}

