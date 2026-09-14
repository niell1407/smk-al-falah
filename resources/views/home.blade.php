 @extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- ========================================================= --}}
{{-- HERO --}}
{{-- ========================================================= --}}
<section class="py-5"
         style="
 background-image:
    linear-gradient(
        rgba(234, 246, 252, 0.80),
        rgba(234, 246, 252, 0.80)
    ),
    url('{{ asset('assets/images/background-sekolah.jpg') }}');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
         ">
          <div class="container py-5">

        <div class="row align-items-center g-5">

            {{-- TEKS --}}
            <div class="col-lg-6">

                <span class="badge rounded-pill px-3 py-2 mb-3"
                      style="
                        background: #eaf6fc;
                        color: #176b9d;
                      ">

                    SMK AL FALAH TANJUNGJAYA

                </span>

                <h1 class="display-5 fw-bold mb-3"
                    style="color: #123b57;">

                    Membangun Generasi
                    <span style="color: #176b9d;">
                        Terampil & Berkarakter
                    </span>

                </h1>

                <p class="text-secondary fs-5 mb-4">

                    SMK Al Falah Tanjungjaya berkomitmen
                    memberikan pendidikan kejuruan yang
                    berkualitas serta membentuk peserta didik
                    yang terampil, mandiri, dan berkarakter.

                </p>

                <div class="d-flex flex-wrap gap-2">

                    <a href="{{ route('profil.index') }}"
                       class="btn btn-school rounded-pill px-4">

                        Profil Sekolah

                        <i class="bi bi-arrow-right ms-2"></i>

                    </a>

                    <a href="{{ route('pendaftar.create') }}"
                       class="btn btn-outline-primary rounded-pill px-4">

                        Daftar Sekarang

                    </a>

                </div>

            </div>


            {{-- ILUSTRASI --}}
            <div class="col-lg-6">

                <div class="p-5 rounded-4 text-center"
                     style="
                        background: #e6f3fa;
                        box-shadow: 0 10px 35px rgba(0,0,0,.06);
                     ">

                    <img src="{{ asset('assets/images/siswa-prestasi.png') }}"
     alt="Siswa Berprestasi"
     style="
        width: 100%;
        max-width: 420px;
        height: 250px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
     ">

                    <h4 class="fw-bold mt-3"
                        style="color: #123b57;">

                        SMK Al Falah Tanjungjaya

                    </h4>

                    <p class="text-secondary mb-0">

                        Terampil, Berkarakter,
                        dan Siap Menghadapi Masa Depan.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ========================================================= --}}
{{-- STATISTIK --}}
{{-- ========================================================= --}}

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <p class="fw-semibold mb-2"
               style="color: #176b9d;">

                DATA SEKOLAH

            </p>

            <h2 class="section-title">

                Sekilas Tentang Sekolah

            </h2>

        </div>


        <div class="row g-4">

            {{-- SISWA --}}
            <div class="col-md-6 col-lg-3">

                <a href="{{ route('pendaftar.create') }}"
                   class="text-decoration-none">

                    <div class="card border-0 h-100 text-center"
                         style="
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0,0,0,.07);
                         ">

                        <div class="card-body p-4">

                            <div class="mx-auto mb-3 d-flex
                                        align-items-center
                                        justify-content-center"
                                 style="
                                    width: 65px;
                                    height: 65px;
                                    border-radius: 15px;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-people-fill fs-3"
                                   style="color: #176b9d;">
                                </i>

                            </div>

                            <h3 class="fw-bold mb-1"
                                style="color: #123b57;">

                                520+

                            </h3>

                            <p class="text-secondary mb-0">

                                Siswa Aktif

                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- GURU --}}
            <div class="col-md-6 col-lg-3">

                <a href="{{ route('guru.index') }}"
                   class="text-decoration-none">

                    <div class="card border-0 h-100 text-center"
                         style="
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0,0,0,.07);
                         ">

                        <div class="card-body p-4">

                            <div class="mx-auto mb-3 d-flex
                                        align-items-center
                                        justify-content-center"
                                 style="
                                    width: 65px;
                                    height: 65px;
                                    border-radius: 15px;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-person-workspace fs-3"
                                   style="color: #176b9d;">
                                </i>

                            </div>

                            <h3 class="fw-bold mb-1"
                                style="color: #123b57;">

                                61+

                            </h3>

                            <p class="text-secondary mb-0">

                                Guru & Tenaga Kependidikan

                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- EKSTRAKURIKULER --}}
            <div class="col-md-6 col-lg-3">

                <a href="{{ route('ekstrakurikuler.index') }}"
                   class="text-decoration-none">

                    <div class="card border-0 h-100 text-center"
                         style="
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0,0,0,.07);
                         ">

                        <div class="card-body p-4">

                            <div class="mx-auto mb-3 d-flex
                                        align-items-center
                                        justify-content-center"
                                 style="
                                    width: 65px;
                                    height: 65px;
                                    border-radius: 15px;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-trophy-fill fs-3"
                                   style="color: #176b9d;">
                                </i>

                            </div>

                            <h3 class="fw-bold mb-1"
                                style="color: #123b57;">

                                8+

                            </h3>

                            <p class="text-secondary mb-0">

                                Ekstrakurikuler

                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- PROGRAM KEAHLIAN --}}
            <div class="col-md-6 col-lg-3">

                <a href="{{ route('program-keahlian.index') }}"
                   class="text-decoration-none">

                    <div class="card border-0 h-100 text-center"
                         style="
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0,0,0,.07);
                         ">

                        <div class="card-body p-4">

                            <div class="mx-auto mb-3 d-flex
                                        align-items-center
                                        justify-content-center"
                                 style="
                                    width: 65px;
                                    height: 65px;
                                    border-radius: 15px;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-mortarboard-fill fs-3"
                                   style="color: #176b9d;">
                                </i>

                            </div>

                            <h3 class="fw-bold mb-1"
                                style="color: #123b57;">

                                8+

                            </h3>

                            <p class="text-secondary mb-0">

                                Program Keahlian

                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>


{{-- ========================================================= --}}
{{-- PROFIL SINGKAT --}}
{{-- ========================================================= --}}

<section class="py-5"
         style="background: #f7fbfd;">

    <div class="container py-4">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="p-5 rounded-4"
                     style="
                        background: #eaf6fc;
                        min-height: 330px;
                     ">

                    <div class="text-center pt-4">

                        <i class="bi bi-bank"
                           style="
                                font-size: 100px;
                                color: #176b9d;
                           ">
                        </i>

                        <h4 class="fw-bold mt-3"
                            style="color: #123b57;">

                            SMK Al Falah Tanjungjaya

                        </h4>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <p class="fw-semibold mb-2"
                   style="color: #176b9d;">

                    PROFIL SEKOLAH

                </p>

                <h2 class="section-title mb-3">

                    Tempat Tumbuh dan Berkembangnya
                    Generasi Muda

                </h2>

                <p class="text-secondary">

                    SMK Al Falah Tanjungjaya merupakan lembaga
                    pendidikan yang berkomitmen memberikan
                    pendidikan kejuruan yang berkualitas kepada
                    peserta didik.

                </p>

                <p class="text-secondary">

                    Melalui pembelajaran yang seimbang antara
                    pengetahuan, keterampilan, karakter, dan
                    pengalaman, sekolah mempersiapkan siswa
                    untuk melanjutkan pendidikan maupun memasuki
                    dunia kerja.

                </p>

                <a href="{{ route('profil.index') }}"
                   class="btn btn-school mt-2">

                    Selengkapnya

                    <i class="bi bi-arrow-right ms-2"></i>

                </a>

            </div>

        </div>

    </div>

</section>


{{-- ========================================================= --}}
{{-- ALUMNI SUKSES --}}
{{-- ========================================================= --}}

<section class="py-5">

    <div class="container">

        {{-- HEADER --}}
        <div class="text-center mb-5">

            <p class="fw-semibold mb-2"
               style="color: #176b9d;">

                ALUMNI SUKSES

            </p>

            <h2 class="section-title mb-3">

                Langkah Mereka, Inspirasi Kita

            </h2>

            <p class="text-secondary mx-auto"
               style="max-width: 700px;">

                Setiap alumni memiliki perjalanan masing-masing
                setelah menyelesaikan pendidikan di
                SMK Al Falah Tanjungjaya.

            </p>

        </div>


        {{-- DATA ALUMNI DARI DATABASE --}}
        <div class="row g-4">

            @forelse ($alumni as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 h-100 overflow-hidden"
                         style="
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0,0,0,.07);
                         ">

                        {{-- FOTO ALUMNI --}}
                        @if ($item->foto)

                            <div class="d-flex align-items-center justify-content-center"
                                 style="
                                    height: 280px;
                                    background: #f5faff;
                                    overflow: hidden;
                                 ">

                                <img src="{{ asset('storage/' . $item->foto) }}"
                                     alt="{{ $item->nama }}"
                                     style="
                                        width: 100%;
                                        height: 100%;
                                        object-fit: contain;
                                        display: block;
                                     ">

                            </div>

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="
                                    height: 280px;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-person-circle"
                                   style="
                                      font-size: 90px;
                                      color: #176b9d;
                                   ">
                                </i>

                            </div>

                        @endif


                        {{-- DATA ALUMNI --}}
                        <div class="card-body p-4">

                            {{-- NAMA --}}
                            <h5 class="fw-bold mb-1"
                                style="color: #123b57;">

                                {{ $item->nama }}

                            </h5>


                            {{-- JURUSAN --}}
                            <p class="text-secondary mb-3">

                                Alumni {{ $item->jurusan }}

                            </p>


                            {{-- STATUS --}}
                            <span class="badge rounded-pill mb-3"
                                  style="
                                    background: #eaf6fc;
                                    color: #176b9d;
                                  ">

                                <i class="bi bi-briefcase-fill me-1"></i>

                                {{ $item->status }}

                            </span>


                            {{-- MOTIVASI --}}
                            <div class="p-3 rounded-4"
                                 style="
                                    background: #f5faff;
                                 ">

                                <p class="text-secondary mb-0">

                                    "{{ $item->motivasi }}"

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="text-center py-5">

                        <i class="bi bi-people"
                           style="
                              font-size: 60px;
                              color: #176b9d;
                           ">
                        </i>

                        <h4 class="fw-bold mt-3"
                            style="color: #123b57;">

                            Belum Ada Data Alumni

                        </h4>

                        <p class="text-secondary">

                            Data alumni yang ditambahkan melalui
                            halaman Admin akan tampil di sini.

                        </p>

                    </div>

                </div>

            @endforelse

        </div>


        {{-- MOTIVASI BAWAH --}}
        <div class="text-center mt-5">

            <div class="p-4 rounded-4"
                 style="
                    background: linear-gradient(
                        135deg,
                        #eaf6fc,
                        #f7fbfd
                    );
                 ">

                <i class="bi bi-quote fs-1"
                   style="color: #176b9d;">
                </i>

                <h4 class="fw-bold"
                    style="color: #123b57;">

                    Dari SMK, Menuju Masa Depan
                    yang Lebih Baik.

                </h4>

                <p class="text-secondary mb-0 mx-auto"
                   style="max-width: 750px;">

                    Pilih jurusan sesuai minatmu, manfaatkan
                    setiap kesempatan untuk belajar, dan terus
                    kembangkan kemampuan. Masa depan dimulai
                    dari langkah yang kamu ambil hari ini.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ========================================================= --}}
{{-- BERITA & KEGIATAN --}}
{{-- ========================================================= --}}

<section class="py-5"
         style="background: #f7fbfd;">

    <div class="container">

        <div class="d-flex justify-content-between
                    align-items-end mb-4">

            <div>

                <p class="fw-semibold mb-2"
                   style="color: #176b9d;">

                    BERITA & KEGIATAN

                </p>

                <h2 class="section-title mb-0">

                    Informasi Terbaru

                </h2>

            </div>


            <a href="{{ route('berita.index') }}"
               class="btn btn-outline-primary rounded-pill">

                Lihat Semua

                <i class="bi bi-arrow-right ms-1"></i>

            </a>

        </div>


        <div class="row g-4">

            @forelse ($berita as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 h-100"
                         style="
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0,0,0,.07);
                         ">

                        <div class="card-body p-4">

                            <span class="badge mb-3"
                                  style="
                                    background: #eaf6fc;
                                    color: #176b9d;
                                  ">

                                {{ $item['kategori'] }}

                            </span>

                            <h5 class="fw-bold"
                                style="color: #123b57;">

                                {{ $item['judul'] }}

                            </h5>

                            <p class="text-muted small mb-3">

                                <i class="bi bi-calendar3 me-1"></i>

                                {{ $item['tanggal'] }}

                            </p>

                            <p class="text-secondary">

                                {{ $item['deskripsi'] }}

                            </p>

                            <a href="{{ route('berita.index') }}"
                               class="btn btn-outline-primary
                                      rounded-pill">

                                Selengkapnya

                                <i class="bi bi-arrow-right ms-1"></i>

                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <p class="text-center text-secondary">

                        Belum ada berita.

                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- ========================================================= --}}
{{-- PENUTUP --}}
{{-- ========================================================= --}}

<section class="py-5">

    <div class="container">

        <div class="text-center">

            <div class="p-5 rounded-4"
                 style="
                    background: #123b57;
                    color: white;
                 ">

                <i class="bi bi-mortarboard-fill"
                   style="font-size: 50px;">
                </i>

                <h2 class="fw-bold mt-3">

                    Siap Menjadi Bagian
                    dari SMK Al Falah Tanjungjaya?

                </h2>

                <p class="mb-4">

                    Mari tumbuh, belajar, dan berkembang
                    bersama.

                </p>

                <a href="{{ route('pendaftar.create') }}"
                   class="btn btn-light rounded-pill px-4">

                    Daftar Sekarang

                    <i class="bi bi-arrow-right ms-2"></i>

                </a>

            </div>

        </div>

    </div>

</section>

@endsection