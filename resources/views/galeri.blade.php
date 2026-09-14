@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span
                class="badge rounded-pill px-3 py-2"
                style="background:#eaf6fc;color:#176b9d;"
            >
                Galeri Sekolah
            </span>

            <h1 class="fw-bold mt-3">
                Galeri Kegiatan
            </h1>

            <p class="text-muted mx-auto"
               style="max-width:700px;">

                Dokumentasi kegiatan dan aktivitas
                SMK Al Falah Tanjungjaya.

            </p>

        </div>


        @if($galeri->count() > 0)

            <div class="row g-4">

                @foreach($galeri as $item)

                    <div class="col-md-6 col-lg-4">

                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                            <img
                                src="{{ asset('storage/' . $item->foto) }}"
                                alt="{{ $item->judul }}"
                                style="
                                    width:100%;
                                    height:240px;
                                    object-fit:cover;
                                "
                            >


                            <div class="card-body p-4">

                                <h5 class="fw-bold">
                                    {{ $item->judul }}
                                </h5>


                                @if($item->deskripsi)

                                    <p class="text-muted mb-0">
                                        {{ $item->deskripsi }}
                                    </p>

                                @endif

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="text-center py-5">

                <i class="bi bi-images fs-1 text-muted"></i>

                <h5 class="mt-3">
                    Belum ada foto
                </h5>

                <p class="text-muted">
                    Dokumentasi kegiatan sekolah akan ditampilkan di sini.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection