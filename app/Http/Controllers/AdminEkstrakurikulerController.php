<?php

namespace App\Http\Controllers;

use App\Models\EkstrakurikulerFoto;
use Illuminate\Http\Request;

class AdminEkstrakurikulerController extends Controller
{
    public function index()
    {
        $foto = EkstrakurikulerFoto::latest()->get();

        return view('admin.ekstrakurikuler', compact('foto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ekstrakurikuler' => 'required|string|max:100',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $jumlahFoto = EkstrakurikulerFoto::where(
            'ekstrakurikuler',
            $request->ekstrakurikuler
        )->count();

        if ($jumlahFoto >= 3) {
            return back()->with(
                'error',
                'Maksimal 3 foto untuk setiap ekstrakurikuler.'
            );
        }

        $namaFoto = time() . '.' . $request->file('foto')->extension();

        $request->file('foto')->move(
            public_path('assets/images/ekstrakurikuler'),
            $namaFoto
        );

        EkstrakurikulerFoto::create([
            'ekstrakurikuler' => $request->ekstrakurikuler,
            'foto' => $namaFoto,
        ]);

        return back()->with(
            'success',
            'Foto berhasil ditambahkan.'
        );
    }

    public function destroy($id)
    {
        $foto = EkstrakurikulerFoto::findOrFail($id);

        $lokasiFoto = public_path(
            'assets/images/ekstrakurikuler/' . $foto->foto
        );

        if (file_exists($lokasiFoto)) {
            unlink($lokasiFoto);
        }

        $foto->delete();

        return back()->with(
            'success',
            'Foto berhasil dihapus.'
        );
    }
}