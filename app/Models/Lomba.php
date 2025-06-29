<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $fillable = [
        'admin_id',
        'nama_lomba',
        'kategori',
        'tingkat',
        'prestasi',
        'tanggal',
        'deskripsi',
        'gambar',
        'nama_peserta',
    ];
    protected $casts = [
        'nama_peserta' => 'array',
        'tanggal' => 'date',
    ];
    
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
