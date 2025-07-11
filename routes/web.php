<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriUserController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\LombaUserController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolProfileController;

use App\Http\Controllers\TeacherUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.form');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/galeri', [GaleriUserController::class, 'index'])->name('galeri.index');
Route::get('/berita', [BeritaUserController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita}', [BeritaUserController::class, 'show'])->name('berita.detail.show');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::prefix('lomba')->group(function () {
    Route::get('/', [LombaUserController::class, 'index'])->name('lomba.index');
    Route::get('/{kategori}', [LombaUserController::class, 'kategori'])->name('lomba.kategori');
});
Route::get('/profile/sekolah', function () {
    return view('pages.profile.sekolah');
});
Route::get('/profile/guru', [TeacherUserController::class, 'index'])->name('profile.guru.index');










// ADMIN
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard.index');


    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('admin.berita.show');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

    Route::get('/lomba', [LombaController::class, 'index'])->name('admin.lomba.index');
    Route::get('/lomba/create', [LombaController::class, 'create'])->name('admin.lomba.create');
    Route::post('/lomba', [LombaController::class, 'store'])->name('admin.lomba.store');
    Route::get('/lomba/{lomba}/edit', [LombaController::class, 'edit'])->name('admin.lomba.edit');
    Route::put('/lomba/{id}', [LombaController::class, 'update'])->name('admin.lomba.update');
    Route::delete('/lomba/{lomba}', [LombaController::class, 'destroy'])->name('admin.lomba.destroy');

    Route::get('/guru', [TeacherController::class, 'index'])->name('admin.guru.index');
    Route::get('/guru/create', [TeacherController::class, 'create'])->name('admin.guru.create');
    Route::post('/guru', [TeacherController::class, 'store'])->name('admin.guru.store');
    Route::get('/guru/{id}/edit', [TeacherController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/guru/{id}', [TeacherController::class, 'update'])->name('admin.guru.update');
    Route::delete('/guru/{id}', [TeacherController::class, 'destroy'])->name('admin.guru.destroy');

    Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');

    Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('admin.pengaduan.index');
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('admin.pengaduan.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
