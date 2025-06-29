<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriUserController extends Controller
{
    public function index()
    {
        $galeris = \App\Models\Galeri::latest()->get();
        return view('pages.galeri', compact('galeris'));
    }
}
