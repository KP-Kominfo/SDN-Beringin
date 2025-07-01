<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Galeri;
use App\Models\Teacher;
use App\Models\Pengaduan;
use App\Models\Berita;
use App\Models\Lomba;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index',
            [
                'galeriCount' => Galeri::count(),
                'teacherCount' => Teacher::count(),
                'pengaduanCount' => Pengaduan::count(),
                'beritaCount' => Berita::count(),
                'lombaCount' => Lomba::count(),
            ]
    );
    }
}