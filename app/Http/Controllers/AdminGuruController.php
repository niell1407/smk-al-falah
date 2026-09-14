<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class AdminGuruController extends Controller
{
    public function index()
    {
        $guru = Guru::latest()->get();

        return view('admin.guru', compact('guru'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'mata_pelajaran' => 'required|string|max:100',
        ]);

        $jumlahGuru = Guru::count();

        if ($jumlahGuru >= 6) {
            return back()->with(
                'error',
                'Maksimal 6 guru yang dapat ditambahkan.'
            );
        }

        Guru::create($data);

        return back()->with(
            'success',
            'Data guru berhasil ditambahkan.'
        );
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        $guru->delete();

        return back()->with(
            'success',
            'Data guru berhasil dihapus.'
        );
    }
}