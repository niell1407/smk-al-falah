<?php

namespace App\Http\Controllers;

use App\Models\EkstrakurikulerFoto;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekskul = [
            'Pramuka',
            'Paskibra',
            'Olahraga',
            'Seni & Budaya',
            'Keagamaan',
            'Teknologi',
        ];

        return view('ekstrakurikuler', compact('ekskul'));
    }

    public function detail(Request $request)
    {
        $nama = $request->query('nama');

        $foto = EkstrakurikulerFoto::where(
            'ekstrakurikuler',
            $nama
        )->latest()->get();

        return view('ekstrakurikuler-detail', [
            'nama' => $nama,
            'foto' => $foto,
        ]);
    }
}