<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherUserController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all()->groupBy('kategori');
        
        return view('pages.profile.guru', compact('teachers'));
    }
}
