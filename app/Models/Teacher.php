<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    protected $fillable = [
        'nama', 'gelar', 'jabatan', 'mapel', 'kelas', 'kategori', 'foto'
    ];
}


