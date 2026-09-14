<?php

namespace App\Http\Controllers;

use App\Models\ProgramKeahlianFoto;

class ProgramKeahlianController extends Controller
{
    public function index()
    {
        $foto = ProgramKeahlianFoto::all()->keyBy('jurusan');

        return view('program-keahlian', compact('foto'));
    }
}