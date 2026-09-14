@extends('layouts.app')

@section('title', 'Admin Galeri')

@section('content')

<section class="py-5">

    <div class="container">

        {{-- HEADER --}}

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    Galeri Sekolah
                </h2>

                <p class="text-muted mb-0">
                    Kelola foto kegiatan SMK Al Falah Tanjungjaya.
                </p>
            </div>

            <a href="{{ route('admin.index') }}"
               class="btn btn-outline-primary rounded-pill">

                <i class="bi bi-arrow-left"></i>
                Kembali

            </a>

        </div>


        {{-- PESAN BERHASIL --}}

        @if(session('success'))

            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill me-1"></i>
                {{ session('success') }}
            </div>

        @endif


        {{-- PESAN ERROR --}}

        @if($errors->any())

            <div class="alert alert-danger">

                <strong>Terjadi kesalahan:</strong>

                <ul class="mb-0 mt-2">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- ========================= --}}
        {{-- FORM TAMBAH FOTO --}}
        {{-- ========================= --}}

        <div class="card border-0 shadow-sm rounded-4 mb-5">

            <div class="card-body p-4">

                <h5 class="fw-bold mb-4">

                    <i class="bi bi-cloud-arrow-up-fill text-primary me-2"></i>

                    Tambah Foto Galeri

                </h5>


                <form
                    action="{{ route('admin.galeri.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    <div class="row g-3">

                        {{-- JUDUL --}}

                        <div class="col-md-6">

                            <label class="form-label fw-semibold">
                                Judul
                            </label>

                            <input
                                type="text"
                                name="judul"
                                class="form-control"
                                placeholder="Contoh: Kegiatan MPLS"
                                required
                            >

                        </div>


                        {{-- FOTO --}}

                        <div class="col-md-6">

                            <label class="form-label fw-semibold">
                                Foto
                            </label>

                            <input
                                type="file"
                                name="foto"
                                class="form-control"
                                accept=".jpg,.jpeg,.png"
                                required
                            >

                            <small class="text-muted">
                                JPG, JPEG, PNG — maksimal 2 MB
                            </small>

                        </div>


                        {{-- DESKRIPSI --}}

                        <div class="col-12">

                            <label class="form-label fw-semibold">
                                Deskripsi
                            </label>

                            <textarea
                                name="deskripsi"
                                class="form-control"
                                rows="3"
                                placeholder="Tuliskan deskripsi kegiatan..."
                            ></textarea>

                        </div>


                        {{-- BUTTON UPLOAD --}}

                        <div class="col-12">

                            <button
                                type="submit"
                                class="btn btn-primary rounded-pill px-4"
                            >

                                <i class="bi bi-upload me-1"></i>

                                Upload Foto

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        {{-- ========================= --}}
        {{-- DAFTAR GALERI --}}
        {{-- ========================= --}}

        <h4 class="fw-bold mb-4">
            Foto Galeri
        </h4>


        @if($galeri->count() > 0)

            <div class="row g-4">

                @foreach($galeri as $item)

                    <div class="col-md-6 col-lg-4">

                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">


                            {{-- FOTO --}}

                            <img
                                src="{{ asset('storage/' . $item->foto) }}"
                                alt="{{ $item->judul }}"
                                style="
                                    width:100%;
                                    height:220px;
                                    object-fit:cover;
                                "
                            >


                            <div class="card-body p-4">


                                {{-- JUDUL --}}

                                <h5 class="fw-bold">
                                    {{ $item->judul }}
                                </h5>


                                {{-- DESKRIPSI --}}

                                @if($item->deskripsi)

                                    <p class="text-muted">
                                        {{ $item->deskripsi }}
                                    </p>

                                @endif


                                {{-- ================= --}}
                                {{-- TOMBOL EDIT --}}
                                {{-- ================= --}}

                                <a
                                    href="{{ route('admin.galeri.edit', $item->id) }}"
                                    class="btn btn-outline-primary rounded-pill w-100 mb-2"
                                >

                                    <i class="bi bi-pencil-square me-1"></i>

                                    Edit

                                </a>


                                {{-- ================= --}}
                                {{-- TOMBOL HAPUS --}}
                                {{-- ================= --}}

                                <form
                                    action="{{ route('admin.galeri.destroy', $item->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn btn-outline-danger rounded-pill w-100"
                                        onclick="return confirm('Yakin ingin menghapus foto ini?')"
                                    >

                                        <i class="bi bi-trash me-1"></i>

                                        Hapus

                                    </button>

                                </form>


                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


        @else


            {{-- BELUM ADA FOTO --}}

            <div class="text-center py-5">

                <i class="bi bi-images fs-1 text-muted"></i>

                <p class="text-muted mt-3">
                    Belum ada foto di galeri.
                </p>

            </div>


        @endif

    </div>

</section>

@endsection