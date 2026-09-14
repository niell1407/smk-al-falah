<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view('admin.galeri', compact('galeri'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['foto'] = $request->file('foto')->store(
            'galeri',
            'public'
        );

        Galeri::create($data);

        return back()->with(
            'success',
            'Foto galeri berhasil ditambahkan.'
        );
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri-edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {

            if ($galeri->foto) {
                Storage::disk('public')->delete($galeri->foto);
            }

            $data['foto'] = $request->file('foto')->store(
                'galeri',
                'public'
            );
        }

        $galeri->update($data);

        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->foto) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->delete();

        return back()->with(
            'success',
            'Foto galeri berhasil dihapus.'
        );
    }
}