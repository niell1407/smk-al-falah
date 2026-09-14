<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $fillable = [
        'nama',
        'nisn',
        'sekolah_asal',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_orang_tua',
        'no_hp',
        'alamat',
        'jurusan',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}