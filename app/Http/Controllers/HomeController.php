<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Alumni;

class HomeController extends Controller
{
    public function index()
    {
        $statistik = [
            [
                'jumlah' => 520,
                'label' => 'Siswa Aktif',
                'icon' => 'bi-people-fill',
            ],
            [
                'jumlah' => 61,
                'label' => 'Guru & Tenaga Kependidikan',
                'icon' => 'bi-person-workspace',
            ],
            [
                'jumlah' => 8,
                'label' => 'Ekstrakurikuler',
                'icon' => 'bi-trophy-fill',
            ],
            [
                'jumlah' => 4,
                'label' => 'Program Keahlian',
                'icon' => 'bi-mortarboard-fill',
            ],
        ];

        $berita = [
            [
                'judul' => 'Kegiatan MPLS SMK Al Falah Tanjungjaya',
                'tanggal' => '15 Juli 2026',
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan pengenalan lingkungan sekolah bagi peserta didik baru SMK Al Falah Tanjungjaya.',
            ],
            [
                'judul' => 'Upacara Bendera Hari Senin',
                'tanggal' => '3 Agustus 2026',
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Pelaksanaan upacara bendera sebagai bentuk pembinaan kedisiplinan dan karakter siswa.',
            ],
            [
                'judul' => 'Prestasi Siswa SMK Al Falah Tanjungjaya',
                'tanggal' => '20 Agustus 2026',
                'kategori' => 'Prestasi',
                'deskripsi' => 'Siswa SMK Al Falah Tanjungjaya terus mengembangkan prestasi di bidang akademik maupun nonakademik.',
            ],
        ];

        // Mengambil data guru dari database
        $guru = Guru::latest()->get();

        // Mengambil maksimal 3 data alumni dari database
        $alumni = Alumni::latest()->take(3)->get();

        return view('home', compact(
            'statistik',
            'berita',
            'guru',
            'alumni'
        ));
    }
}