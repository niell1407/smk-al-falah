<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function create()
    {
        return view('pendaftar.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'nisn' => 'nullable|string|max:20',
            'sekolah_asal' => 'nullable|string|max:150',
            'jenis_kelamin' => 'nullable|string|max:20',
            'tempat_lahir' => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'nama_orang_tua' => 'nullable|string|max:100',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'jurusan' => 'nullable|string|max:100',
        ]);

        Pendaftar::create($data);

        return back()->with(
            'success',
            'Data berhasil dikirim. Terima kasih sudah mengisi formulir.'
        );
    }
}