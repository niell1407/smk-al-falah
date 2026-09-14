@extends('layouts.app')

@section('title', 'Edit Galeri')

@section('content')

<section class="py-5">

    <div class="container" style="max-width: 800px;">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    Edit Galeri
                </h2>

                <p class="text-muted mb-0">
                    Ubah informasi foto galeri sekolah.
                </p>
            </div>

            <a href="{{ route('admin.galeri') }}"
               class="btn btn-outline-primary rounded-pill">

                <i class="bi bi-arrow-left"></i>
                Kembali

            </a>

        </div>


        @if($errors->any())

            <div class="alert alert-danger">

                <strong>Terjadi kesalahan:</strong>

                <ul class="mb-0 mt-2">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body p-4">

                <form
                    action="{{ route('admin.galeri.update', $galeri->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf
                    @method('PUT')


                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Judul
                        </label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            value="{{ old('judul', $galeri->judul) }}"
                            required
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            rows="4"
                        >{{ old('deskripsi', $galeri->deskripsi) }}</textarea>

                    </div>


                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Foto Saat Ini
                        </label>

                        <div class="mb-3">

                            <img
                                src="{{ asset('storage/' . $galeri->foto) }}"
                                alt="{{ $galeri->judul }}"
                                style="
                                    width: 100%;
                                    max-height: 350px;
                                    object-fit: cover;
                                    border-radius: 15px;
                                "
                            >

                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Ganti Foto
                        </label>

                        <input
                            type="file"
                            name="foto"
                            class="form-control"
                            accept=".jpg,.jpeg,.png"
                        >

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                            JPG, JPEG, PNG — maksimal 2 MB.
                        </small>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary rounded-pill px-4"
                    >

                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection