<?php

namespace App\Http\Controllers;

use App\Models\ProgramKeahlianFoto;

class ProgramKeahlianDetailController extends Controller
{
    public function show($jurusan)
    {
        $data = [

            'tsm' => [
                'nama' => 'Teknik Sepeda Motor',
                'singkatan' => 'TSM',
                'deskripsi' => 'Jurusan yang mempelajari perawatan, perbaikan, dan teknologi sepeda motor.',
                'prospek' => [
                    'Mekanik',
                    'Teknisi Bengkel',
                    'Service Advisor',
                ],
            ],

            'tbsm' => [
                'nama' => 'Teknik dan Bisnis Sepeda Motor',
                'singkatan' => 'TBSM',
                'deskripsi' => 'Mempelajari servis sepeda motor sekaligus pengelolaan bisnis otomotif.',
                'prospek' => [
                    'Mekanik',
                    'Wirausaha Bengkel',
                    'Marketing Otomotif',
                ],
            ],

            'dpb' => [
                'nama' => 'Tata Busana',
                'singkatan' => 'DPB',
                'deskripsi' => 'Mempelajari desain pakaian, pola, menjahit, dan industri fashion.',
                'prospek' => [
                    'Fashion Designer',
                    'Penjahit',
                    'Entrepreneur Fashion',
                ],
            ],

            'rpl' => [
                'nama' => 'Rekayasa Perangkat Lunak',
                'singkatan' => 'RPL',
                'deskripsi' => 'Mempelajari pemrograman, pembuatan website, aplikasi, dan database.',
                'prospek' => [
                    'Programmer',
                    'Web Developer',
                    'UI/UX Designer',
                ],
            ],

            'ak' => [
                'nama' => 'Akuntansi',
                'singkatan' => 'AK',
                'deskripsi' => 'Mempelajari pencatatan keuangan, laporan keuangan, dan perpajakan.',
                'prospek' => [
                    'Akuntan',
                    'Kasir',
                    'Staff Keuangan',
                ],
            ],

            'mplb' => [
                'nama' => 'Manajemen Perkantoran dan Layanan Bisnis',
                'singkatan' => 'MPLB',
                'deskripsi' => 'Mempelajari administrasi perkantoran dan pelayanan bisnis.',
                'prospek' => [
                    'Admin',
                    'Sekretaris',
                    'Customer Service',
                ],
            ],

            'dkv' => [
                'nama' => 'Desain Komunikasi Visual',
                'singkatan' => 'DKV',
                'deskripsi' => 'Mempelajari desain grafis, ilustrasi, fotografi, dan multimedia.',
                'prospek' => [
                    'Graphic Designer',
                    'Content Creator',
                    'Animator',
                ],
            ],

            'tkj' => [
                'nama' => 'Teknik Komputer dan Jaringan',
                'singkatan' => 'TKJ',
                'deskripsi' => 'Mempelajari jaringan komputer, server, dan perangkat keras.',
                'prospek' => [
                    'Network Engineer',
                    'IT Support',
                    'Teknisi Komputer',
                ],
            ],

        ];

        if (!isset($data[$jurusan])) {
            abort(404);
        }

        $foto = ProgramKeahlianFoto::where(
            'jurusan',
            $jurusan
        )->first();

        return view('program-keahlian-detail', [
            'jurusan' => $data[$jurusan],
            'foto' => $foto,
        ]);
    }
}