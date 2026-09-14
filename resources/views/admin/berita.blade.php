<php?
use Illuminate\Support\Str;
php>
@extends('layouts.app')

@section('title', 'Admin Berita')

@section('content')

<section class="py-5">

    <div class="container">

        {{-- HEADER --}}

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    Berita & Kegiatan
                </h2>

                <p class="text-muted mb-0">
                    Kelola berita dan kegiatan SMK Al Falah Tanjungjaya.
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
        {{-- FORM TAMBAH BERITA --}}
        {{-- ========================= --}}

        <div class="card border-0 shadow-sm rounded-4 mb-5">

            <div class="card-body p-4">

                <h5 class="fw-bold mb-4">

                    <i class="bi bi-newspaper text-primary me-2"></i>

                    Tambah Berita / Kegiatan

                </h5>


                <form
                    action="{{ route('admin.berita.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    <div class="row g-3">

                        {{-- JUDUL --}}

                        <div class="col-md-6">

                            <label class="form-label fw-semibold">
                                Judul Berita
                            </label>

                            <input
                                type="text"
                                name="judul"
                                class="form-control"
                                placeholder="Contoh: Kegiatan MPLS SMK Al Falah"
                                required
                            >

                        </div>


                        {{-- KATEGORI --}}

                        <div class="col-md-6">

                            <label class="form-label fw-semibold">
                                Kategori
                            </label>

                            <input
                                type="text"
                                name="kategori"
                                class="form-control"
                                placeholder="Contoh: Kegiatan Sekolah"
                            >

                        </div>


                        {{-- TANGGAL --}}

                        <div class="col-md-6">

                            <label class="form-label fw-semibold">
                                Tanggal
                            </label>

                            <input
                                type="date"
                                name="tanggal"
                                class="form-control"
                                required
                            >

                        </div>


                        {{-- FOTO --}}

                        <div class="col-md-6">

                            <label class="form-label fw-semibold">
                                Foto Berita
                            </label>

                            <input
                                type="file"
                                name="foto"
                                class="form-control"
                                accept=".jpg,.jpeg,.png"
                            >

                            <small class="text-muted">
                                JPG, JPEG, PNG — maksimal 2 MB
                            </small>

                        </div>


                        {{-- ISI --}}

                        <div class="col-12">

                            <label class="form-label fw-semibold">
                                Isi Berita
                            </label>

                            <textarea
                                name="isi"
                                class="form-control"
                                rows="6"
                                placeholder="Tuliskan isi berita atau kegiatan sekolah..."
                                required
                            ></textarea>

                        </div>


                        {{-- BUTTON --}}

                        <div class="col-12">

                            <button
                                type="submit"
                                class="btn btn-primary rounded-pill px-4"
                            >

                                <i class="bi bi-plus-circle me-1"></i>

                                Tambah Berita

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        {{-- ========================= --}}
        {{-- DAFTAR BERITA --}}
        {{-- ========================= --}}

        <h4 class="fw-bold mb-4">
            Daftar Berita
        </h4>


        @if($berita->count() > 0)

            <div class="row g-4">

                @foreach($berita as $item)

                    <div class="col-md-6 col-lg-4">

                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">


                            {{-- FOTO --}}

                            @if($item->foto)

                                <img
                                    src="{{ asset('storage/' . $item->foto) }}"
                                    alt="{{ $item->judul }}"
                                    style="
                                        width:100%;
                                        height:220px;
                                        object-fit:cover;
                                    "
                                >

                            @else

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        height:220px;
                                        background:#eaf6fc;
                                    "
                                >

                                    <i class="bi bi-newspaper"
                                       style="
                                           font-size:60px;
                                           color:#176b9d;
                                       ">
                                    </i>

                                </div>

                            @endif


                            <div class="card-body p-4">

                                {{-- KATEGORI --}}

                                @if($item->kategori)

                                    <span class="badge bg-primary rounded-pill mb-2">
                                        {{ $item->kategori }}
                                    </span>

                                @endif


                                {{-- JUDUL --}}

                                <h5 class="fw-bold">
                                    {{ $item->judul }}
                                </h5>


                                {{-- TANGGAL --}}

                                <p class="text-muted small mb-2">

                                    <i class="bi bi-calendar3 me-1"></i>

                                    {{ $item->tanggal->format('d M Y') }}

                                </p>


                                {{-- ISI --}}

                                <p class="text-muted">

                                    {{ \Illuminate\Support\Str::limit($item->isi, 120) }}

                                </p>


                                {{-- EDIT --}}

                                <a
                                    href="{{ route('admin.berita.edit', $item->id) }}"
                                    class="btn btn-outline-primary rounded-pill w-100 mb-2"
                                >

                                    <i class="bi bi-pencil-square me-1"></i>

                                    Edit

                                </a>


                                {{-- HAPUS --}}

                                <form
                                    action="{{ route('admin.berita.destroy', $item->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn btn-outline-danger rounded-pill w-100"
                                        onclick="return confirm('Yakin ingin menghapus berita ini?')"
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


            <div class="text-center py-5">

                <i class="bi bi-newspaper fs-1 text-muted"></i>

                <p class="text-muted mt-3">
                    Belum ada berita atau kegiatan.
                </p>

            </div>


        @endif

    </div>

</section>

@endsection