@extends('layouts.app')

@section('title', 'Ekstrakurikuler | SMK Al Falah Tanjungjaya')

@section('content')

<section class="py-5" style="background: #eaf6fc;">
    <div class="container py-5 text-center">

        <p class="fw-semibold" style="color: #176b9d;">
            KEGIATAN SISWA
        </p>

        <h1 class="fw-bold" style="color: #123b57;">
            Ekstrakurikuler
        </h1>

        <p class="text-secondary">
            Wadah bagi siswa untuk mengembangkan minat,
            bakat, kreativitas, dan prestasi.
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-4">

            @php
                $ekskul = [
                    ['nama' => 'Pramuka', 'icon' => 'bi-compass-fill'],
                    ['nama' => 'Paskibra', 'icon' => 'bi-flag-fill'],
                    ['nama' => 'Olahraga', 'icon' => 'bi-trophy-fill'],
                    ['nama' => 'Seni & Budaya', 'icon' => 'bi-music-note-beamed'],
                    ['nama' => 'Keagamaan', 'icon' => 'bi-book-half'],
                    ['nama' => 'Teknologi', 'icon' => 'bi-laptop-fill'],
                ];
            @endphp

            @foreach($ekskul as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">

                        <div class="mx-auto mb-3 d-flex align-items-center justify-content-center"
                             style="
                                width: 70px;
                                height: 70px;
                                border-radius: 18px;
                                background: #eaf6fc;
                             ">

                            <i class="bi {{ $item['icon'] }} fs-2"
                               style="color: #176b9d;">
                            </i>

                        </div>

                        <h5 class="fw-bold" style="color: #123b57;">
                            {{ $item['nama'] }}
                        </h5>

                        <p class="text-secondary mb-3">
                            Kegiatan pengembangan minat dan bakat
                            siswa SMK Al Falah Tanjungjaya.
                        </p>

                        <div class="mt-auto">
                           <a href="{{ route('ekstrakurikuler.detail', ['nama' => $item['nama']]) }}"
                                class="btn btn-outline-primary rounded-pill px-4">
                                Lihat Detail
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

@endsection