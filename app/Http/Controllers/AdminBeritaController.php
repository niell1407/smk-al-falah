<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest('tanggal')->get();

        return view('admin.berita', compact('berita'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'nullable|string|max:100',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store(
                'berita',
                'public'
            );
        }

        Berita::create($data);

        return back()->with(
            'success',
            'Berita berhasil ditambahkan.'
        );
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita-edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'nullable|string|max:100',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('foto')) {

            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }

            $data['foto'] = $request->file('foto')->store(
                'berita',
                'public'
            );
        }

        $berita->update($data);

        return redirect()
            ->route('admin.berita')
            ->with(
                'success',
                'Berita berhasil diperbarui.'
            );
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }

        $berita->delete();

        return back()->with(
            'success',
            'Berita berhasil dihapus.'
        );
    }
}