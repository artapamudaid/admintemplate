<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'judul',
        'subjudul',
        'foto',
        'sejarah',
        'visi',
        'misi',
        'lulusan',
        'kurikulum',
        'teks_dosen',
    ];
}
