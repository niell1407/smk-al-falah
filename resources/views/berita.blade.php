@extends('layouts.app')

@section('title', 'Berita & Kegiatan | SMK Al Falah Tanjungjaya')

@section('content')

<section class="py-5" style="background: #eaf6fc;">
    <div class="container py-5 text-center">

        <p class="fw-semibold" style="color: #176b9d;">
            INFORMASI SEKOLAH
        </p>

        <h1 class="fw-bold" style="color: #123b57;">
            Berita & Kegiatan
        </h1>

        <p class="text-secondary">
            Informasi terbaru mengenai kegiatan SMK Al Falah Tanjungjaya.
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-4">

            @php
                $berita = [
                    [
                        'judul' => 'Kegiatan MPLS',
                        'tanggal' => '15 Juli 2026',
                        'kategori' => 'Kegiatan Sekolah',
                    ],
                    [
                        'judul' => 'Upacara Bendera',
                        'tanggal' => '3 Agustus 2026',
                        'kategori' => 'Kegiatan Sekolah',
                    ],
                    [
                        'judul' => 'Prestasi Siswa',
                        'tanggal' => '20 Agustus 2026',
                        'kategori' => 'Prestasi',
                    ],
                ];
            @endphp

            @foreach($berita as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <div class="d-flex align-items-center justify-content-center"
                             style="
                                height: 200px;
                                background: #eaf6fc;
                             ">

                            <i class="bi bi-newspaper"
                               style="
                                  font-size: 65px;
                                  color: #176b9d;
                               ">
                            </i>

                        </div>

                        <div class="card-body p-4">

                            <small class="text-secondary">
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ $item['tanggal'] }}
                            </small>

                            <h5 class="fw-bold mt-2"
                                style="color: #123b57;">
                                {{ $item['judul'] }}
                            </h5>

                            <span class="badge rounded-pill"
                                  style="
                                    background: #eaf6fc;
                                    color: #176b9d;
                                  ">
                                {{ $item['kategori'] }}
                            </span>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

@endsection