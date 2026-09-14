<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'isi',
        'foto',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}