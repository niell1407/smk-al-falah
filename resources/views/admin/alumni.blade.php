@extends('layouts.app')

@section('content')

<style>
    .admin-container {
        padding: 40px;
        background: #f5f8fc;
        min-height: 100vh;
    }

    .admin-title {
        color: #0d6efd;
        font-weight: 700;
        margin-bottom: 25px;
    }

    .card-admin {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        margin-bottom: 30px;
    }

    .alumni-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        height: 100%;
    }

    .alumni-card img {
        width: 100%;
        height: 230px;
        object-fit: cover;
    }

    .alumni-content {
        padding: 20px;
    }

    .alumni-content h5 {
        font-weight: 700;
        color: #123;
        margin-bottom: 5px;
    }

    .alumni-content .jurusan {
        color: #0d6efd;
        font-size: 14px;
        font-weight: 600;
    }

    .alumni-content .status {
        display: inline-block;
        background: #e8f1ff;
        color: #0d6efd;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 13px;
        margin: 8px 0;
    }

    .alumni-content .motivasi {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
    }

    .btn-edit {
        background: #0d6efd;
        color: white;
    }

    .btn-edit:hover {
        background: #0b5ed7;
        color: white;
    }
</style>

<div class="admin-container">

    <h2 class="admin-title">
        <i class="bi bi-person-hearts"></i>
        Alumni Sukses
    </h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Form Tambah Alumni --}}
    <div class="card-admin">

        <h5 class="mb-4">
            <i class="bi bi-plus-circle"></i>
            Tambah Alumni
        </h5>

        <form action="{{ route('admin.alumni.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Alumni</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           placeholder="Masukkan nama alumni"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text"
                           name="jurusan"
                           class="form-control"
                           placeholder="Contoh: Alumni RPL"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Status / Pekerjaan</label>
                    <input type="text"
                           name="status"
                           class="form-control"
                           placeholder="Contoh: Web Developer"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Foto Alumni</label>
                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">
                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Motivasi</label>
                    <textarea name="motivasi"
                              class="form-control"
                              rows="4"
                              placeholder="Tuliskan motivasi atau pesan alumni..."
                              required></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i>
                Simpan Alumni
            </button>

        </form>

    </div>


    {{-- Data Alumni --}}
    <h5 class="mb-3">
        Data Alumni
    </h5>

    <div class="row g-4">

        @forelse($alumni as $item)

            <div class="col-md-4">

                <div class="alumni-card">

                    @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}"
                             alt="{{ $item->nama }}">
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="height:230px;">
                            <i class="bi bi-person-circle"
                               style="font-size:80px; color:#adb5bd;"></i>
                        </div>
                    @endif

                    <div class="alumni-content">

                        <h5>{{ $item->nama }}</h5>

                        <div class="jurusan">
                            {{ $item->jurusan }}
                        </div>

                        <span class="status">
                            {{ $item->status }}
                        </span>

                        <p class="motivasi">
                            "{{ $item->motivasi }}"
                        </p>

                        <div class="d-flex gap-2">

                            <a href="{{ route('admin.alumni.edit', $item->id) }}"
                               class="btn btn-edit btn-sm">
                                <i class="bi bi-pencil"></i>
                                Edit
                            </a>

                            <form action="{{ route('admin.alumni.destroy', $item->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus alumni ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">
                <div class="alert alert-info">
                    Belum ada data Alumni. Silakan tambahkan alumni terlebih dahulu.
                </div>
            </div>

        @endforelse

    </div>

</div>

@endsection