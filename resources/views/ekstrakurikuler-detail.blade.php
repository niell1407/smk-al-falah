@extends('layouts.app')

@section('title', 'Detail Ekstrakurikuler | SMK Al Falah Tanjungjaya')

@section('content')

{{-- Header --}}
<section class="py-5" style="background: #eaf6fc;">
    <div class="container py-4">

        <div class="text-center">

            <a href="{{ route('ekstrakurikuler.index') }}"
               class="btn btn-outline-primary rounded-pill mb-4">
                <i class="bi bi-arrow-left me-1"></i>
                Kembali ke Ekstrakurikuler
            </a>

            <p class="fw-semibold mb-2" style="color: #176b9d;">
                KEGIATAN SISWA
            </p>

            <h1 class="fw-bold" style="color: #123b57;">
                {{ $nama }}
            </h1>

            <p class="text-secondary mb-0">
                Kegiatan ekstrakurikuler SMK Al Falah Tanjungjaya
            </p>

        </div>

    </div>
</section>


{{-- Foto kegiatan --}}
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold" style="color: #123b57;">
                Foto Kegiatan {{ $nama }}
            </h2>

            <p class="text-secondary">
                Dokumentasi kegiatan ekstrakurikuler
            </p>

        </div>


        <div class="row g-4 justify-content-center">

            @forelse($foto as $item)

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <img src="{{ asset('assets/images/ekstrakurikuler/' . $item->foto) }}"
                            alt="Foto kegiatan {{ $nama }}"
                            class="w-100"
                            style="height: 300px; object-fit: contain; background: #fdfefe;">
                        <div class="card-body text-center">

                            <h6 class="fw-bold mb-0"
                                style="color: #123b57;">
                                {{ $nama }}
                            </h6>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-lg-8">

                    <div class="text-center p-5 rounded-4"
                         style="background: #f5f9fc;">

                        <i class="bi bi-images"
                           style="font-size: 60px; color: #176b9d;">
                        </i>

                        <h5 class="fw-bold mt-3"
                            style="color: #123b57;">
                            Belum Ada Foto
                        </h5>

                        <p class="text-secondary mb-0">
                            Foto kegiatan {{ $nama }} belum ditambahkan.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- Informasi --}}
<section class="py-5" style="background: #f8fbfd;">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5 text-center">

                        <div class="mb-3">

                            <i class="bi bi-stars"
                               style="font-size: 45px; color: #176b9d;">
                            </i>

                        </div>

                        <h4 class="fw-bold"
                            style="color: #123b57;">
                            Tentang {{ $nama }}
                        </h4>

                        <p class="text-secondary mb-0">
                            Ekstrakurikuler {{ $nama }} merupakan salah satu
                            kegiatan siswa di SMK Al Falah Tanjungjaya yang
                            menjadi wadah untuk mengembangkan minat,
                            bakat, kreativitas, dan pengalaman siswa.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection