<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
     protected $fillable = [
        'judul', 'konten','foto', 'admin_id'
    ];

    // protected $casts = [
    //     'tanggal' => 'date',
    // ];

    public function admin(){
        return $this->belongsTo(User::class, 'admin_id');
    }
}
