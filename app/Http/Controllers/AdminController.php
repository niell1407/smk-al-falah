<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Pendaftar;
use App\Models\ProgramKeahlianFoto;
use App\Models\EkstrakurikulerFoto;

class AdminController extends Controller
{
    public function index()
    {
        $jumlahSiswa = Pendaftar::count();
        $jumlahGuru = Guru::count();
        $jumlahJurusan = 8;
        $jumlahEkstrakurikuler = 6;

        return view('admin.index', compact(
            'jumlahSiswa',
            'jumlahGuru',
            'jumlahJurusan',
            'jumlahEkstrakurikuler'
        ));
    }
}