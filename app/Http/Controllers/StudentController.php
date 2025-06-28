<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('profil.siswa.index', compact('students'));
    }

    public function create()
    {
        return view('profil.siswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'nis' => 'nullable|string',
            'kelas' => 'nullable|string',
            'foto' => 'nullable|image',
            'keterangan' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('siswa');
        }

        Student::create($validated);
        return redirect()->route('profil-siswa.index');
    }
}

