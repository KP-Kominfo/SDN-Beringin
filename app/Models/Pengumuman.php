<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{

    protected $table = 'pengumumans';
    protected $fillable = [
        'judul',
        'konten',
        'kategori',
        'tag',
        'status',
        'icon',
        'admin_id', // foreign key untuk admin yang membuat pengumuman
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
