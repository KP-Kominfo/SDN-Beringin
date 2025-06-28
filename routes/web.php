<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LombaUserController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolProfileController;

use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.form');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/berita', [BeritaUserController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita}', [BeritaUserController::class, 'show'])->name('berita.detail.show');

Route::prefix('lomba')->group(function () {
    Route::get('/', [LombaUserController::class, 'index'])->name('lomba.index');
    Route::get('/{kategori}', [LombaUserController::class, 'kategori'])->name('lomba.kategori');
});



Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified', 'role:admin'])->name('admin.dashboard');


    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('admin.berita.show');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');


    Route::resource('/profil/guru', TeacherController::class)->names('profil-guru');
    Route::get('/profil/sekolah', function () {
        return view('dashboard');
    });
    Route::resource('/profil/siswa', StudentController::class)->names('profil-siswa');


    // Route::prefix('lomba')->middleware(['auth', 'role:admin'])->group(function () {
    //     Route::get('/admin', [LombaController::class, 'adminIndex'])->name('admin.lomba.index');
    //     Route::get('/create', [LombaController::class, 'create'])->name('admin.lomba.create');
    //     Route::post('/', [LombaController::class, 'store'])->name('admin.lomba.store');
    //     Route::get('/{id}/edit', [LombaController::class, 'edit'])->name('admin.lomba.edit');
    //     Route::put('/{id}', [LombaController::class, 'update'])->name('admin.lomba.update');
    //     Route::delete('/{id}', [LombaController::class, 'destroy'])->name('admin.lomba.destroy');
    // });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
