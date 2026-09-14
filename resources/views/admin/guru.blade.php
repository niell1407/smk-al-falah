@extends('layouts.app')

@section('title', 'Data Guru | Admin')

@section('content')

<div class="container py-5">

    {{-- HEADER --}}
    <div class="text-center mb-5">

        <span class="badge rounded-pill px-3 py-2 mb-3"
              style="background-color: #e8f4ff; color: #1677c8;">
            ADMIN WEBSITE
        </span>

        <h1 class="fw-bold">
            Data Guru & Tenaga Kependidikan
        </h1>

        <p class="text-muted">
            Kelola data guru yang akan ditampilkan di website sekolah.
        </p>

    </div>


    {{-- PESAN BERHASIL --}}
    @if(session('success'))

        <div class="alert alert-success rounded-4">
            <i class="bi bi-check-circle me-1"></i>
            {{ session('success') }}
        </div>

    @endif


    {{-- PESAN ERROR --}}
    @if(session('error'))

        <div class="alert alert-danger rounded-4">
            <i class="bi bi-exclamation-circle me-1"></i>
            {{ session('error') }}
        </div>

    @endif


    <div class="row g-4">


        {{-- FORM TAMBAH GURU --}}
        <div class="col-lg-5">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body p-4">

                    <h4 class="fw-bold mb-4">

                        <i class="bi bi-person-plus-fill me-2"
                           style="color: #176b9d;">
                        </i>

                        Tambah Data Guru

                    </h4>


                    <form action="{{ route('admin.guru.store') }}"
                          method="POST">

                        @csrf


                        {{-- NAMA --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nama Guru
                            </label>

                            <input type="text"
                                   name="nama"
                                   class="form-control rounded-3"
                                   placeholder="Masukkan nama guru"
                                   value="{{ old('nama') }}"
                                   required>

                            @error('nama')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                        {{-- MATA PELAJARAN --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Mata Pelajaran
                            </label>

                            <input type="text"
                                   name="mata_pelajaran"
                                   class="form-control rounded-3"
                                   placeholder="Contoh: Bahasa Indonesia"
                                   value="{{ old('mata_pelajaran') }}"
                                   required>

                            @error('mata_pelajaran')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                        <button type="submit"
                                class="btn btn-school w-100 rounded-pill">

                            <i class="bi bi-plus-circle me-1"></i>

                            Tambahkan Guru

                        </button>

                    </form>

                </div>

            </div>

        </div>


        {{-- DAFTAR GURU --}}
        <div class="col-lg-7">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h4 class="fw-bold mb-0">

                            <i class="bi bi-people-fill me-2"
                               style="color: #176b9d;">
                            </i>

                            Daftar Guru

                        </h4>

                        <span class="badge rounded-pill"
                              style="background-color: #eaf6fc; color: #176b9d;">

                            {{ $guru->count() }} / 6

                        </span>

                    </div>


                    @forelse($guru as $item)

                        <div class="d-flex align-items-center justify-content-between
                                    p-3 mb-3 rounded-4"
                             style="background-color: #f5f9fc;">

                            <div class="d-flex align-items-center">

                                <div class="d-flex align-items-center justify-content-center me-3"
                                     style="
                                        width: 50px;
                                        height: 50px;
                                        border-radius: 50%;
                                        background-color: #eaf6fc;
                                     ">

                                    <i class="bi bi-person-badge-fill"
                                       style="color: #176b9d;">
                                    </i>

                                </div>


                                <div>

                                    <h6 class="fw-bold mb-1">
                                        {{ $item->nama }}
                                    </h6>

                                    <small class="text-muted">
                                        {{ $item->mata_pelajaran }}
                                    </small>

                                </div>

                            </div>


                            {{-- HAPUS --}}
                            <form action="{{ route('admin.guru.destroy', $item->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-outline-danger btn-sm rounded-pill"
                                        onclick="return confirm('Yakin ingin menghapus data guru ini?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </div>

                    @empty

                        <div class="text-center py-5">

                            <i class="bi bi-person-x fs-1 text-muted"></i>

                            <p class="text-muted mt-3 mb-0">
                                Belum ada data guru.
                            </p>

                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>


    {{-- KEMBALI --}}
    <div class="text-center mt-5">

        <a href="{{ route('admin.index') }}"
           class="btn btn-outline-primary rounded-pill px-4">

            <i class="bi bi-arrow-left me-1"></i>

            Kembali ke Admin

        </a>

    </div>

</div>

@endsection