<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'foto',
        'tanggal',
        'admin_id', 
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
