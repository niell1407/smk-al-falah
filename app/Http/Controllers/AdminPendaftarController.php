<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;

class AdminPendaftarController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftar::latest()->get();

        return view('admin.pendaftar', compact('pendaftar'));
    }

    public function destroy($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);

        $pendaftar->delete();

        return back()->with(
            'success',
            'Data pendaftar berhasil dihapus.'
        );
    }
}