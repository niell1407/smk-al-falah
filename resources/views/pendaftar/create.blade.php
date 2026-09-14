@extends('layouts.app')

@section('title', 'Formulir Minat Pendaftaran | SMK Al Falah Tanjungjaya')

@section('content')

<section class="py-5" style="background: #eaf6fc;">

    <div class="container py-4">

        <!-- Header -->
        <div class="text-center mb-5">

            <span class="badge rounded-pill px-3 py-2 mb-3"
                  style="background-color: #e8f4ff; color: #1677c8;">
                PENDAFTARAN
            </span>

            <h1 class="fw-bold" style="color: #123b57;">
                Formulir Minat Pendaftaran
            </h1>

            <p class="text-muted mb-0">
                Silakan isi data dengan benar untuk menyampaikan minat
                pendaftaran di SMK Al Falah Tanjungjaya.
            </p>

        </div>

        <!-- Pesan Berhasil -->
        @if(session('success'))

            <div class="alert alert-success rounded-4 shadow-sm">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
            </div>

        @endif

        <!-- Pesan Error -->
        @if($errors->any())

            <div class="alert alert-danger rounded-4 shadow-sm">

                <strong>
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    Ada data yang perlu diperbaiki:
                </strong>

                <ul class="mb-0 mt-2">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif

        <!-- Form -->
        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5">

                        <form action="{{ route('pendaftar.store') }}"
                              method="POST">

                            @csrf

                            <!-- Data Siswa -->
                            <h5 class="fw-bold mb-4"
                                style="color: #123b57;">

                                <i class="bi bi-person-vcard me-2"></i>
                                Data Calon Peserta Didik

                            </h5>

                            <div class="row g-3">

                                <!-- Nama -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nama Lengkap
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text"
                                           name="nama"
                                           class="form-control rounded-3"
                                           value="{{ old('nama') }}"
                                           placeholder="Masukkan nama lengkap"
                                           required>

                                </div>

                                <!-- NISN -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        NISN
                                    </label>

                                    <input type="text"
                                           name="nisn"
                                           class="form-control rounded-3"
                                           value="{{ old('nisn') }}"
                                           placeholder="Masukkan NISN">

                                </div>

                                <!-- Sekolah Asal -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Sekolah Asal
                                    </label>

                                    <input type="text"
                                           name="sekolah_asal"
                                           class="form-control rounded-3"
                                           value="{{ old('sekolah_asal') }}"
                                           placeholder="Contoh: SMP/MTs">

                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Jenis Kelamin
                                    </label>

                                    <select name="jenis_kelamin"
                                            class="form-select rounded-3">

                                        <option value="">
                                            Pilih jenis kelamin
                                        </option>

                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>

                                    </select>

                                </div>

                                <!-- Tempat Lahir -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Tempat Lahir
                                    </label>

                                    <input type="text"
                                           name="tempat_lahir"
                                           class="form-control rounded-3"
                                           value="{{ old('tempat_lahir') }}"
                                           placeholder="Masukkan tempat lahir">

                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Tanggal Lahir
                                    </label>

                                    <input type="date"
                                           name="tanggal_lahir"
                                           class="form-control rounded-3"
                                           value="{{ old('tanggal_lahir') }}">

                                </div>

                                <!-- Nama Orang Tua -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nama Orang Tua / Wali
                                    </label>

                                    <input type="text"
                                           name="nama_orang_tua"
                                           class="form-control rounded-3"
                                           value="{{ old('nama_orang_tua') }}"
                                           placeholder="Masukkan nama orang tua/wali">

                                </div>

                                <!-- No HP -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        No. HP
                                    </label>

                                    <input type="text"
                                           name="no_hp"
                                           class="form-control rounded-3"
                                           value="{{ old('no_hp') }}"
                                           placeholder="Contoh: 08xxxxxxxxxx">

                                </div>

                                <!-- Jurusan -->
                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Jurusan yang Diminati
                                    </label>

                                    <select name="jurusan"
                                            class="form-select rounded-3">

                                        <option value="">
                                            Pilih jurusan
                                        </option>

                                        <option value="PPLG"
                                            {{ old('jurusan') == 'PPLG' ? 'selected' : '' }}>
                                            PPLG
                                        </option>

                                        <option value="TJKT"
                                            {{ old('jurusan') == 'TJKT' ? 'selected' : '' }}>
                                            TJKT
                                        </option>

                                        <option value="MPLB"
                                            {{ old('jurusan') == 'MPLB' ? 'selected' : '' }}>
                                            MPLB
                                        </option>

                                    </select>

                                </div>

                                <!-- Alamat -->
                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Alamat
                                    </label>

                                    <textarea name="alamat"
                                              class="form-control rounded-3"
                                              rows="4"
                                              placeholder="Masukkan alamat">{{ old('alamat') }}</textarea>

                                </div>

                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-end">

                                <button type="submit"
                                        class="btn btn-primary rounded-pill px-4 py-2">

                                    <i class="bi bi-send-fill me-1"></i>
                                    Kirim Formulir

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection