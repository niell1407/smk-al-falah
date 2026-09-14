@extends('layouts.app')

@section('title', 'Admin Ekstrakurikuler')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 mb-3"
              style="background-color: #e8f4ff; color: #1677c8;">
            ADMIN
        </span>

        <h1 class="fw-bold">Kelola Foto Ekstrakurikuler</h1>

        <p class="text-muted">
            Tambahkan maksimal 3 foto untuk setiap ekstrakurikuler.
        </p>
    </div>

    {{-- Pesan berhasil --}}
    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <div class="alert alert-danger rounded-4">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger rounded-4">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form tambah foto --}}
    <div class="card border-0 shadow-sm rounded-4 mb-5">
        <div class="card-body p-4">

            <h4 class="fw-bold mb-4">
                <i class="bi bi-camera me-2"></i>
                Tambah Foto
            </h4>

            <form action="{{ route('admin.ekstrakurikuler.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Pilih Ekstrakurikuler
                    </label>

                    <select name="ekstrakurikuler"
                            class="form-select rounded-3"
                            required>

                        <option value="">-- Pilih Ekstrakurikuler --</option>
                        <option value="Pramuka">Pramuka</option>
                        <option value="Paskibra">Paskibra</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Seni & Budaya">Seni & Budaya</option>
                        <option value="Keagamaan">Keagamaan</option>
                        <option value="Teknologi">Teknologi</option>

                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Pilih Foto
                    </label>

                    <input type="file"
                           name="foto"
                           class="form-control rounded-3"
                           accept=".jpg,.jpeg,.png"
                           required>

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>
                </div>

                <button type="submit"
                        class="btn btn-primary rounded-pill px-4">

                    <i class="bi bi-upload me-1"></i>
                    Tambah Foto

                </button>

            </form>

        </div>
    </div>

    {{-- Daftar foto --}}
    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-4">

            <h4 class="fw-bold mb-4">
                Foto yang Sudah Ditambahkan
            </h4>

            <div class="row g-4">

                @forelse($foto as $item)

                    <div class="col-md-6 col-lg-4">

                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                            <img src="{{ asset('assets/images/ekstrakurikuler/' . $item->foto) }}"
                                 class="w-100"
                                 style="height: 220px; object-fit: cover;">

                            <div class="card-body">

                                <h6 class="fw-bold">
                                    {{ $item->ekstrakurikuler }}
                                </h6>

                                <form action="{{ route('admin.ekstrakurikuler.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus foto ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-outline-danger btn-sm rounded-pill">

                                        <i class="bi bi-trash me-1"></i>
                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12 text-center py-4">

                        <i class="bi bi-images"
                           style="font-size: 50px; color: #1677c8;"></i>

                        <p class="text-muted mt-3 mb-0">
                            Belum ada foto yang ditambahkan.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </div>

</div>

@endsection