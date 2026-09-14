@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 mb-3"
              style="background-color: #e8f4ff; color: #1677c8;">
            PROFIL SEKOLAH
        </span>

        <h1 class="fw-bold">SMK Al Falah Tanjungjaya</h1>

        <p class="text-muted mb-0">
            Mengenal lebih dekat sekolah dan informasi pendidikan
        </p>
    </div>

    <!-- Tentang Sekolah -->
    <div class="row align-items-center mb-5">

        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="fw-bold mb-3">Tentang Sekolah</h2>

            <p class="text-muted">
                SMK Al Falah Tanjungjaya merupakan sekolah menengah kejuruan
                yang berkomitmen memberikan pendidikan dan keterampilan kepada
                peserta didik agar siap melanjutkan pendidikan maupun memasuki
                dunia kerja.
            </p>

            <p class="text-muted">
                Sekolah terus berupaya menciptakan lingkungan belajar yang
                nyaman, disiplin, kreatif, dan mendukung perkembangan potensi
                setiap peserta didik.
            </p>
        </div>

        <div class="col-lg-6">
            <div class="p-4 rounded-4 shadow-sm"
                 style="background: linear-gradient(135deg, #eaf6ff, #ffffff);">

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-building fs-1 me-3"
                       style="color: #1677c8;"></i>

                    <div>
                        <h5 class="fw-bold mb-1">SMK Al Falah Tanjungjaya</h5>
                        <p class="text-muted mb-0">
                            Sekolah Menengah Kejuruan
                        </p>
                    </div>
                </div>

                <p class="text-muted mb-0">
                    Tempat untuk belajar, berkembang, dan mempersiapkan
                    generasi muda menuju masa depan.
                </p>

            </div>
        </div>

    </div>


    <!-- Informasi Sekolah -->
    <div class="mb-5">

        <h2 class="fw-bold text-center mb-4">
            Informasi Sekolah
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <tbody>

                    <tr>
                        <th style="width: 35%; background-color: #eaf6ff;">
                            Nama Sekolah
                        </th>
                        <td>SMK Al Falah Tanjungjaya</td>
                    </tr>

                    <tr>
                        <th style="background-color: #eaf6ff;">
                            Jenjang Pendidikan
                        </th>
                        <td>SMK</td>
                    </tr>

                    <tr>
                        <th style="background-color: #eaf6ff;">
                            Status Sekolah
                        </th>
                        <td>Swasta</td>
                    </tr>

                    <tr>
                        <th style="background-color: #eaf6ff;">
                            Alamat
                        </th>
                        <td>
                            Tanjungjaya
                        </td>
                    </tr>

                    <tr>
                        <th style="background-color: #eaf6ff;">
                            Provinsi
                        </th>
                        <td>Jawa Barat</td>
                    </tr>

                    <tr>
                        <th style="background-color: #eaf6ff;">
                            Website
                        </th>
                        <td>SMK Al Falah Tanjungjaya</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>


    <!-- Visi Misi -->
    <div class="row g-4">

        <div class="col-md-6">

            <div class="h-100 p-4 rounded-4 shadow-sm border">

                <div class="mb-3">
                    <i class="bi bi-eye fs-2"
                       style="color: #1677c8;"></i>
                </div>

                <h3 class="fw-bold">Visi</h3>

                <p class="text-muted mb-0">
                    Menjadi sekolah yang unggul dalam pendidikan,
                    keterampilan, karakter, dan mampu menghasilkan lulusan
                    yang kompeten serta berakhlak.
                </p>

            </div>

        </div>


        <div class="col-md-6">

            <div class="h-100 p-4 rounded-4 shadow-sm border">

                <div class="mb-3">
                    <i class="bi bi-bullseye fs-2"
                       style="color: #1677c8;"></i>
                </div>

                <h3 class="fw-bold">Misi</h3>

                <ul class="text-muted">

                    <li class="mb-2">
                        Meningkatkan kualitas pembelajaran.
                    </li>

                    <li class="mb-2">
                        Mengembangkan keterampilan peserta didik.
                    </li>

                    <li class="mb-2">
                        Menanamkan kedisiplinan dan tanggung jawab.
                    </li>

                    <li>
                        Mendorong peserta didik menjadi pribadi yang
                        kreatif dan mandiri.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

@endsection