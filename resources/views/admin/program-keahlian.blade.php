@extends('layouts.app')

@section('title', 'Admin Program Keahlian')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    Program Keahlian
                </h2>

                <p class="text-muted mb-0">
                    Kelola foto untuk setiap program keahlian.
                </p>
            </div>

            <a href="{{ route('admin.index') }}"
               class="btn btn-outline-primary rounded-pill">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>

        </div>


        @if(session('success'))

            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill"></i>
                {{ session('success') }}
            </div>

        @endif


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


        <div class="row g-4">

            @foreach($jurusan as $kode => $nama)

                <div class="col-lg-6">

                    <div class="card border-0 shadow-sm rounded-4 h-100">

                        <div class="card-body p-4">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <div>

                                    <h4 class="fw-bold mb-1">
                                        {{ strtoupper($kode) }}
                                    </h4>

                                    <p class="text-muted mb-0">
                                        {{ $nama }}
                                    </p>

                                </div>

                                <i class="bi bi-mortarboard-fill fs-2 text-primary"></i>

                            </div>


                            @if(isset($foto[$kode]) && $foto[$kode]->foto)

                                <img
                                    src="{{ asset('storage/' . $foto[$kode]->foto) }}"
                                    class="img-fluid rounded-4 mb-3"
                                    style="width:100%; height:220px; object-fit:cover;"
                                    alt="{{ $nama }}"
                                >

                            @else

                                <div
                                    class="rounded-4 mb-3 d-flex align-items-center justify-content-center"
                                    style="height:220px; background:#eef7fc;"
                                >

                                    <div class="text-center text-muted">

                                        <i class="bi bi-image fs-1"></i>

                                        <p class="mb-0 mt-2">
                                            Belum ada foto
                                        </p>

                                    </div>

                                </div>

                            @endif


                            <form
                                action="{{ route('admin.program-keahlian.store') }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >

                                @csrf

                                <input
                                    type="hidden"
                                    name="jurusan"
                                    value="{{ $kode }}"
                                >


                                <label class="form-label fw-semibold">
                                    {{ isset($foto[$kode]) && $foto[$kode]->foto ? 'Ganti Foto' : 'Upload Foto' }}
                                </label>

                                <input
                                    type="file"
                                    name="foto"
                                    class="form-control mb-3"
                                    accept=".jpg,.jpeg,.png"
                                    required
                                >

                                <button
                                    type="submit"
                                    class="btn btn-primary rounded-pill w-100"
                                >

                                    <i class="bi bi-upload"></i>

                                    {{ isset($foto[$kode]) && $foto[$kode]->foto ? 'Ganti Foto' : 'Upload Foto' }}

                                </button>

                            </form>


                            @if(isset($foto[$kode]) && $foto[$kode]->foto)

                                <form
                                    action="{{ route('admin.program-keahlian.destroy', $foto[$kode]->id) }}"
                                    method="POST"
                                    class="mt-2"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-outline-danger rounded-pill w-100"
                                        onclick="return confirm('Yakin ingin menghapus foto ini?')"
                                    >

                                        <i class="bi bi-trash"></i>
                                        Hapus Foto

                                    </button>

                                </form>

                            @endif

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection