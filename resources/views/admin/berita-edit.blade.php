@extends('layouts.app')

@section('title', 'Edit Berita / Kegiatan')

@section('content')

<div class="container py-5">

    {{-- HEADER --}}
    <div class="mb-4">
        <a href="{{ route('admin.berita') }}"
           class="btn btn-outline-primary rounded-pill">

            <i class="bi bi-arrow-left me-1"></i>
            Kembali ke Berita

        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-4 p-md-5">

            <h2 class="fw-bold mb-1">
                Edit Berita / Kegiatan
            </h2>

            <p class="text-muted mb-4">
                Ubah informasi berita atau kegiatan sekolah.
            </p>

            {{-- PESAN ERROR --}}
            @if ($errors->any())

                <div class="alert alert-danger rounded-3">

                    <strong>Periksa kembali data:</strong>

                    <ul class="mb-0 mt-2">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            {{-- FORM --}}
            <form action="{{ route('admin.berita.update', $berita->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Judul Berita
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control rounded-3"
                           value="{{ old('judul', $berita->judul) }}"
                           required>

                </div>

                {{-- KATEGORI --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Kategori
                    </label>

                    <input type="text"
                           name="kategori"
                           class="form-control rounded-3"
                           value="{{ old('kategori', $berita->kategori) }}"
                           placeholder="Contoh: Kegiatan Sekolah">

                </div>

                {{-- TANGGAL --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control rounded-3"
                           value="{{ old('tanggal', $berita->tanggal->format('Y-m-d')) }}"
                           required>

                </div>

                {{-- FOTO LAMA --}}
                @if ($berita->foto)

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Foto Saat Ini
                        </label>

                        <div>
                            <img src="{{ asset('storage/' . $berita->foto) }}"
                                 alt="{{ $berita->judul }}"
                                 class="rounded-4 shadow-sm"
                                 style="width: 220px; height: 140px; object-fit: cover;">
                        </div>

                    </div>

                @endif

                {{-- FOTO BARU --}}
                <div class="mb-3">

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

                {{-- ISI --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Isi Berita
                    </label>

                    <textarea name="isi"
                              rows="8"
                              class="form-control rounded-3"
                              required>{{ old('isi', $berita->isi) }}</textarea>

                </div>

                {{-- TOMBOL --}}
                <div class="d-flex gap-2">

                    <a href="{{ route('admin.berita') }}"
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