@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<style>

    body {
        background: #f4f8fb;
    }

    .admin-wrapper {
        min-height: calc(100vh - 70px);
        display: flex;
    }

    /* SIDEBAR */

    .admin-sidebar {
        width: 250px;
        background: #ffffff;
        border-right: 1px solid #e5edf3;
        padding: 25px 15px;
        flex-shrink: 0;
    }

    .admin-brand {
        padding: 10px 15px 25px;
        border-bottom: 1px solid #edf2f5;
        margin-bottom: 20px;
    }

    .admin-brand h5 {
        margin: 0;
        font-weight: 700;
        color: #176b9d;
    }

    .admin-brand small {
        color: #8a9aa8;
    }

    .admin-menu-title {
        font-size: 11px;
        font-weight: 700;
        color: #9aa8b3;
        text-transform: uppercase;
        padding: 0 15px;
        margin-bottom: 10px;
        letter-spacing: .5px;
    }

    .admin-menu {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .admin-menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 15px;
        border-radius: 10px;
        color: #536574;
        text-decoration: none;
        font-weight: 500;
        transition: .2s;
    }

    .admin-menu a i {
        font-size: 18px;
        width: 22px;
    }

    .admin-menu a:hover,
    .admin-menu a.active {
        background: #eaf6fc;
        color: #176b9d;
    }

    .admin-logout {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #edf2f5;
    }

    .admin-logout button {
        width: 100%;
        border: 0;
        background: transparent;
        text-align: left;
        color: #dc3545;
        padding: 12px 15px;
        border-radius: 10px;
        font-weight: 500;
    }

    .admin-logout button:hover {
        background: #fff0f1;
    }

    /* CONTENT */

    .admin-content {
        flex: 1;
        padding: 35px;
        min-width: 0;
    }

    .admin-header {
        margin-bottom: 30px;
    }

    .admin-header h2 {
        font-weight: 700;
        margin-bottom: 5px;
        color: #1d2d38;
    }

    .admin-header p {
        color: #82909b;
        margin: 0;
    }

    /* STATISTIC */

    .stat-card {
        background: #ffffff;
        border: 0;
        border-radius: 16px;
        padding: 22px;
        height: 100%;
        box-shadow: 0 5px 20px rgba(25, 70, 95, .06);
        transition: .2s;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(25, 70, 95, .10);
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf6fc;
        color: #176b9d;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .stat-number {
        font-size: 28px;
        font-weight: 700;
        color: #1d2d38;
    }

    .stat-label {
        color: #7b8b97;
        font-size: 14px;
    }

    /* MANAGEMENT */

    .section-title {
        font-weight: 700;
        color: #1d2d38;
        margin-bottom: 18px;
    }

    .manage-card {
        background: #ffffff;
        border: 0;
        border-radius: 16px;
        padding: 24px;
        height: 100%;
        box-shadow: 0 5px 20px rgba(25, 70, 95, .06);
        transition: .2s;
    }

    .manage-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(25, 70, 95, .10);
    }

    .manage-icon {
        width: 55px;
        height: 55px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf6fc;
        color: #176b9d;
        font-size: 25px;
        margin-bottom: 18px;
    }

    .manage-card h5 {
        font-weight: 700;
        margin-bottom: 8px;
    }

    .manage-card p {
        color: #7b8b97;
        font-size: 14px;
        min-height: 42px;
    }

    .manage-card .btn {
        margin-top: 8px;
    }

    /* MOBILE */

    @media (max-width: 991px) {

        .admin-sidebar {
            width: 210px;
        }

        .admin-content {
            padding: 25px;
        }

    }

    @media (max-width: 767px) {

        .admin-wrapper {
            flex-direction: column;
        }

        .admin-sidebar {
            width: 100%;
            border-right: 0;
            border-bottom: 1px solid #e5edf3;
        }

        .admin-menu {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .admin-logout {
            margin-top: 15px;
        }

        .admin-content {
            padding: 20px;
        }

    }

</style>


<div class="admin-wrapper">

    {{-- SIDEBAR --}}

    <aside class="admin-sidebar">

        <div class="admin-brand">

            <h5>
                <i class="bi bi-building"></i>
                Admin Sekolah
            </h5>

            <small>
                SMK Al Falah Tanjungjaya
            </small>

        </div>


        <div class="admin-menu-title">
            Menu Utama
        </div>


        <div class="admin-menu">

            <a href="{{ route('admin.index') }}"
               class="{{ request()->routeIs('admin.index') ? 'active' : '' }}">

                <i class="bi bi-grid-fill"></i>

                Dashboard

            </a>


            <a href="{{ route('admin.pendaftar') }}">

                <i class="bi bi-person-vcard-fill"></i>

                Data Pendaftar

            </a>


            <a href="{{ route('admin.guru') }}">

                <i class="bi bi-person-workspace"></i>

                Data Guru

            </a>


            <a href="{{ route('admin.program-keahlian') }}">

                <i class="bi bi-mortarboard-fill"></i>

                Program Keahlian

            </a>


            <a href="{{ route('admin.ekstrakurikuler') }}">

                <i class="bi bi-trophy-fill"></i>

                Ekstrakurikuler

            </a>
                        <a href="{{ route('admin.galeri') }}">

                <i class="bi bi-images"></i>

                Galeri

                </a>
                <a href="{{ route('admin.berita') }}">
                <i class="bi bi-newspaper"></i>
                Berita / Kegiatan
            </a>
            <a href="{{ route('admin.alumni') }}">
    <i class="bi bi-person-hearts"></i>
    Alumni Sukses
</a>

        </div>


        <div class="admin-menu-title mt-4">
            Website
        </div>


        <div class="admin-menu">

            <a href="{{ route('home') }}" target="_blank">

                <i class="bi bi-globe2"></i>

                Lihat Website

            </a>

        </div>


        <div class="admin-logout">

            <form action="{{ route('admin.logout') }}" method="POST">

                @csrf

                <button type="submit">

                    <i class="bi bi-box-arrow-right me-2"></i>

                    Keluar

                </button>

            </form>

        </div>

    </aside>


    {{-- CONTENT --}}

    <main class="admin-content">

        <div class="admin-header">

            <h2>
                Dashboard
            </h2>

            <p>
                Selamat datang di panel administrasi SMK Al Falah Tanjungjaya.
            </p>

        </div>


        {{-- STATISTIK --}}

        <div class="row g-4 mb-5">

            {{-- SISWA --}}

            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div class="stat-number">
                        {{ $jumlahSiswa }}
                    </div>

                    <div class="stat-label">
                        Data Pendaftar
                    </div>

                </div>

            </div>


            {{-- GURU --}}

            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <div class="stat-number">
                        {{ $jumlahGuru }}
                    </div>

                    <div class="stat-label">
                        Guru & Tenaga Kependidikan
                    </div>

                </div>

            </div>


            {{-- JURUSAN --}}

            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <div class="stat-number">
                        {{ $jumlahJurusan }}
                    </div>

                    <div class="stat-label">
                        Program Keahlian
                    </div>

                </div>

            </div>


            {{-- EKSKUL --}}

            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="bi bi-trophy-fill"></i>
                    </div>

                    <div class="stat-number">
                        {{ $jumlahEkstrakurikuler }}
                    </div>

                    <div class="stat-label">
                        Ekstrakurikuler
                    </div>

                </div>

            </div>

        </div>


        {{-- KELOLA DATA --}}

        <h4 class="section-title">
            Kelola Data
        </h4>


        <div class="row g-4">

            {{-- PENDAFTAR --}}

            <div class="col-md-6 col-xl-4">

                <div class="manage-card">

                    <div class="manage-icon">
                        <i class="bi bi-person-vcard-fill"></i>
                    </div>

                    <h5>
                        Data Pendaftar
                    </h5>

                    <p>
                        Melihat dan mengelola data siswa yang melakukan pendaftaran.
                    </p>

                    <a href="{{ route('admin.pendaftar') }}"
                       class="btn btn-primary rounded-pill">

                        Kelola Data
                        <i class="bi bi-arrow-right ms-1"></i>

                    </a>

                </div>

            </div>


            {{-- GURU --}}

            <div class="col-md-6 col-xl-4">

                <div class="manage-card">

                    <div class="manage-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <h5>
                        Data Guru
                    </h5>

                    <p>
                        Menambah, melihat, dan menghapus data guru sekolah.
                    </p>

                    <a href="{{ route('admin.guru') }}"
                       class="btn btn-primary rounded-pill">

                        Kelola Data
                        <i class="bi bi-arrow-right ms-1"></i>

                    </a>

                </div>

            </div>


            {{-- PROGRAM KEAHLIAN --}}

            <div class="col-md-6 col-xl-4">

                <div class="manage-card">

                    <div class="manage-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <h5>
                        Program Keahlian
                    </h5>

                    <p>
                        Mengelola foto untuk 8 program keahlian sekolah.
                    </p>

                    <a href="{{ route('admin.program-keahlian') }}"
                       class="btn btn-primary rounded-pill">

                        Kelola Data
                        <i class="bi bi-arrow-right ms-1"></i>

                    </a>

                </div>

            </div>


            {{-- EKSKUL --}}

            <div class="col-md-6 col-xl-4">

                <div class="manage-card">

                    <div class="manage-icon">
                        <i class="bi bi-trophy-fill"></i>
                    </div>

                    <h5>
                        Ekstrakurikuler
                    </h5>

                    <p>
                        Mengelola foto dan data kegiatan ekstrakurikuler.
                    </p>

                    <a href="{{ route('admin.ekstrakurikuler') }}"
                       class="btn btn-primary rounded-pill">

                        Kelola Data
                        <i class="bi bi-arrow-right ms-1"></i>

                    </a>

                </div>

            </div>


            {{-- WEBSITE --}}

            <div class="col-md-6 col-xl-4">

                <div class="manage-card">

                    <div class="manage-icon">
                        <i class="bi bi-globe2"></i>
                    </div>

                    <h5>
                        Website Sekolah
                    </h5>

                    <p>
                        Membuka tampilan website sekolah sebagai pengunjung.
                    </p>

                    <a href="{{ route('home') }}"
                       target="_blank"
                       class="btn btn-outline-primary rounded-pill">

                        Lihat Website
                        <i class="bi bi-box-arrow-up-right ms-1"></i>

                    </a>

                </div>

            </div>


            {{-- MODE TAMPILAN --}}

            <div class="col-md-6 col-xl-4">

                <div class="manage-card">

                    <div class="manage-icon">
                        <i class="bi bi-moon-stars-fill"></i>
                    </div>

                    <h5>
                        Mode Tampilan
                    </h5>

                    <p>
                        Atur tampilan website menggunakan mode terang atau gelap.
                    </p>

                    <div class="form-check form-switch mt-3">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="darkModeSwitch"
                        >

                        <label
                            class="form-check-label"
                            for="darkModeSwitch"
                        >
                            Mode Gelap
                        </label>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

@endsection