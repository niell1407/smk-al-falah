@extends('layouts.app')

@section('title', 'Guru & Tenaga Kependidikan | SMK Al Falah Tanjungjaya')

@section('content')

{{-- HEADER --}}
<section class="py-5" style="background: #eaf6fc;">

    <div class="container py-5 text-center">

        <p class="fw-semibold mb-2"
           style="color: #176b9d;">

            TENAGA PENDIDIK

        </p>

        <h1 class="fw-bold"
            style="color: #123b57;">

            Guru & Tenaga Kependidikan

        </h1>

        <p class="text-secondary mb-0">

            Mengenal guru dan tenaga kependidikan
            SMK Al Falah Tanjungjaya.

        </p>

    </div>

</section>


{{-- DAFTAR GURU --}}
<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($guru as $item)

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm rounded-4 h-100">

                        <div class="card-body p-4 text-center">

                            {{-- ICON --}}
                            <div class="mx-auto mb-3 d-flex
                                        align-items-center
                                        justify-content-center"
                                 style="
                                    width: 75px;
                                    height: 75px;
                                    border-radius: 50%;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-person-badge-fill fs-2"
                                   style="color: #176b9d;">
                                </i>

                            </div>


                            {{-- NAMA --}}
                            <h5 class="fw-bold mb-2"
                                style="color: #123b57;">

                                {{ $item->nama }}

                            </h5>


                            {{-- MATA PELAJARAN --}}
                            <p class="text-secondary mb-0">

                                {{ $item->mata_pelajaran }}

                            </p>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-info text-center rounded-4">

                        <i class="bi bi-info-circle me-1"></i>

                        Belum ada data guru yang ditambahkan.

                    </div>

                </div>

            @endforelse

        </div>


        {{-- KEMBALI KE BERANDA --}}
        <div class="text-center mt-5">

            <a href="{{ route('home') }}"
               class="btn btn-school rounded-pill px-4">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali ke Beranda

            </a>

        </div>

    </div>

</section>

@endsection