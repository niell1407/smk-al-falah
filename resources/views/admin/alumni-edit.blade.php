@extends('layouts.app')

@section('title', 'Edit Alumni')

@section('content')

<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('admin.alumni') }}"
           class="btn btn-outline-primary rounded-pill">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-4 p-md-5">

            <h3 class="fw-bold mb-1">
                Edit Data Alumni
            </h3>

            <p class="text-muted mb-4">
                Perbarui informasi alumni SMK Al Falah Tanjungjaya.
            </p>

            @if ($errors->any())
                <div class="alert alert-danger rounded-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.alumni.update', $alumni->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- Nama --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama Alumni
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control rounded-3"
                           value="{{ old('nama', $alumni->nama) }}"
                           required>
                </div>

                {{-- Jurusan --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Jurusan
                    </label>

                    <input type="text"
                           name="jurusan"
                           class="form-control rounded-3"
                           value="{{ old('jurusan', $alumni->jurusan) }}"
                           required>
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Status / Pekerjaan
                    </label>

                    <input type="text"
                           name="status"
                           class="form-control rounded-3"
                           value="{{ old('status', $alumni->status) }}"
                           required>
                </div>

                {{-- Motivasi --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Motivasi / Pesan
                    </label>

                    <textarea name="motivasi"
                              rows="5"
                              class="form-control rounded-3"
                              required>{{ old('motivasi', $alumni->motivasi) }}</textarea>
                </div>

                {{-- Foto Lama --}}
                @if ($alumni->foto)
                    <div class="mb-3">
                        <label class="form-label fw-semibold d-block">
                            Foto Saat Ini
                        </label>

                        <img src="{{ asset('storage/' . $alumni->foto) }}"
                             alt="{{ $alumni->nama }}"
                             class="rounded-4 shadow-sm"
                             style="width: 180px; height: 180px; object-fit: cover;">
                    </div>
                @endif

                {{-- Foto Baru --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Ganti Foto
                    </label>

                    <input type="file"
                           name="foto"
                           class="form-control rounded-3"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
                        Maksimal 2 MB.
                    </small>
                </div>

                {{-- Tombol --}}
                <div class="d-flex gap-2">

                    <a href="{{ route('admin.alumni') }}"
                       class="btn btn-secondary rounded-pill px-4">
                        Batal
                    </a>

                    <button type="submit"
                            class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection