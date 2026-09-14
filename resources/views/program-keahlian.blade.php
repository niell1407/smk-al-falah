@extends('layouts.app')

@section('title', 'Program Keahlian')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge rounded-pill px-3 py-2"
                  style="background:#eaf6fc;color:#176b9d;">
                Program Keahlian
            </span>

            <h1 class="fw-bold mt-3">
                Program Keahlian
            </h1>

            <p class="text-muted mx-auto"
               style="max-width:700px;">
                Pilih program keahlian yang ingin kamu ketahui.
            </p>

        </div>


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">


            {{-- TSM --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'tsm') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['tsm']) && $foto['tsm']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['tsm']->foto) }}"
                                alt="Teknik Sepeda Motor"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-motorcycle fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                TSM
                            </h4>

                            <p class="text-dark mb-0">
                                Teknik Sepeda Motor
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- TBSM --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'tbsm') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['tbsm']) && $foto['tbsm']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['tbsm']->foto) }}"
                                alt="Teknik dan Bisnis Sepeda Motor"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-tools fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                TBSM
                            </h4>

                            <p class="text-dark mb-0">
                                Teknik dan Bisnis Sepeda Motor
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- DPB --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'dpb') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['dpb']) && $foto['dpb']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['dpb']->foto) }}"
                                alt="Tata Busana"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-scissors fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                DPB
                            </h4>

                            <p class="text-dark mb-0">
                                Tata Busana
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- RPL --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'rpl') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['rpl']) && $foto['rpl']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['rpl']->foto) }}"
                                alt="Rekayasa Perangkat Lunak"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-code-slash fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                RPL
                            </h4>

                            <p class="text-dark mb-0">
                                Rekayasa Perangkat Lunak
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- AK --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'ak') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['ak']) && $foto['ak']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['ak']->foto) }}"
                                alt="Akuntansi"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-calculator fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                AK
                            </h4>

                            <p class="text-dark mb-0">
                                Akuntansi
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- MPLB --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'mplb') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['mplb']) && $foto['mplb']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['mplb']->foto) }}"
                                alt="Manajemen Perkantoran dan Layanan Bisnis"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-briefcase fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                MPLB
                            </h4>

                            <p class="text-dark mb-0">
                                Manajemen Perkantoran dan Layanan Bisnis
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- DKV --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'dkv') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['dkv']) && $foto['dkv']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['dkv']->foto) }}"
                                alt="Desain Komunikasi Visual"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-palette fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                DKV
                            </h4>

                            <p class="text-dark mb-0">
                                Desain Komunikasi Visual
                            </p>

                        </div>

                    </div>

                </a>

            </div>


            {{-- TKJ --}}

            <div class="col">

                <a href="{{ route('program-keahlian.show', 'tkj') }}"
                   class="text-decoration-none">

                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                        @if(isset($foto['tkj']) && $foto['tkj']->foto)

                            <img
                                src="{{ asset('storage/' . $foto['tkj']->foto) }}"
                                alt="Teknik Komputer dan Jaringan"
                                style="width:100%;height:200px;object-fit:cover;"
                            >

                        @else

                            <div class="d-flex align-items-center justify-content-center"
                                 style="height:200px;background:#eaf6fc;">

                                <i class="bi bi-pc-display fs-1"
                                   style="color:#176b9d;"></i>

                            </div>

                        @endif


                        <div class="card-body text-center p-4">

                            <h4 class="fw-bold text-primary">
                                TKJ
                            </h4>

                            <p class="text-dark mb-0">
                                Teknik Komputer dan Jaringan
                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>

@endsection