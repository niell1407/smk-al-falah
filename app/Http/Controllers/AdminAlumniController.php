<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::latest()->get();

        return view('admin.alumni', compact('alumni'));
    }

    public function store(Request $request)
    {
        if (Alumni::count() >= 3) {
            return back()->with('error', 'Maksimal hanya 3 data Alumni Sukses.');
        }

        $request->validate([
            'nama' => 'required|string|max:150',
            'jurusan' => 'required|string|max:150',
            'status' => 'required|string|max:150',
            'motivasi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'nama',
            'jurusan',
            'status',
            'motivasi',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('alumni', 'public');
        }

        Alumni::create($data);

        return back()->with('success', 'Data Alumni berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);

        return view('admin.alumni-edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:150',
            'jurusan' => 'required|string|max:150',
            'status' => 'required|string|max:150',
            'motivasi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'nama',
            'jurusan',
            'status',
            'motivasi',
        ]);

        if ($request->hasFile('foto')) {
            if ($alumni->foto && Storage::disk('public')->exists($alumni->foto)) {
                Storage::disk('public')->delete($alumni->foto);
            }

            $data['foto'] = $request->file('foto')->store('alumni', 'public');
        }

        $alumni->update($data);

        return redirect()
            ->route('admin.alumni')
            ->with('success', 'Data Alumni berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);

        if ($alumni->foto && Storage::disk('public')->exists($alumni->foto)) {
            Storage::disk('public')->delete($alumni->foto);
        }

        $alumni->delete();

        return back()->with('success', 'Data Alumni berhasil dihapus.');
    }
}