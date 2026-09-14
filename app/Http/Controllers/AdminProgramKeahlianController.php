<?php

namespace App\Http\Controllers;

use App\Models\ProgramKeahlianFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProgramKeahlianController extends Controller
{
    public function index()
    {
        $jurusan = [
            'tsm' => 'Teknik Sepeda Motor',
            'tbsm' => 'Teknik dan Bisnis Sepeda Motor',
            'dpb' => 'Tata Busana',
            'rpl' => 'Rekayasa Perangkat Lunak',
            'ak' => 'Akuntansi',
            'mplb' => 'Manajemen Perkantoran dan Layanan Bisnis',
            'dkv' => 'Desain Komunikasi Visual',
            'tkj' => 'Teknik Komputer dan Jaringan',
        ];

        $foto = ProgramKeahlianFoto::all()->keyBy('jurusan');

        return view('admin.program-keahlian', compact('jurusan', 'foto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jurusan' => 'required|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = ProgramKeahlianFoto::where(
            'jurusan',
            $request->jurusan
        )->first();

        if ($data && $data->foto) {
            Storage::disk('public')->delete($data->foto);
        }

        $path = $request->file('foto')->store(
            'program-keahlian',
            'public'
        );

        ProgramKeahlianFoto::updateOrCreate(
            ['jurusan' => $request->jurusan],
            ['foto' => $path]
        );

        return back()->with(
            'success',
            'Foto program keahlian berhasil disimpan.'
        );
    }

    public function destroy($id)
    {
        $data = ProgramKeahlianFoto::findOrFail($id);

        if ($data->foto) {
            Storage::disk('public')->delete($data->foto);
        }

        $data->delete();

        return back()->with(
            'success',
            'Foto berhasil dihapus.'
        );
    }
}