 @extends('layouts.app')

@section('title', $berita->judul)

@section('content')

<div class="container py-5">

    {{-- TOMBOL KEMBALI --}}
    <div class="mb-4">
        <a href="{{ route('berita.index') }}"
           class="btn btn-outline-primary rounded-pill">

            <i class="bi bi-arrow-left me-1"></i>
            Kembali ke Berita

        </a>
    </div>


    {{-- DETAIL BERITA --}}
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

         @if ($berita->foto)
    <div class="d-flex justify-content-center align-items-center"
         style="
            width: 100%;
            min-height: 380px;
            background-color: #f5faff;
            overflow: hidden;
         ">
        <img src="{{ asset('storage/' . $berita->foto) }}"
             alt="{{ $berita->judul }}"
             style="
                max-width: 100%;
                max-height: 600px;
                width: auto;
                height: auto;
                object-fit: contain;
                display: block;
             ">
    </div>
@else

            <div class="d-flex align-items-center justify-content-center"
                 style="height: 380px; background-color: #eaf6ff;">

                <i class="bi bi-newspaper"
                   style="font-size: 90px; color: #1677c8;"></i>

            </div>

        @endif


        {{-- ISI --}}
        <div class="card-body p-4 p-md-5">

            {{-- KATEGORI --}}
            @if ($berita->kategori)

                <span class="badge mb-3"
                      style="background-color: #e8f4ff; color: #1677c8;">

                    {{ $berita->kategori }}

                </span>

            @endif


            {{-- JUDUL --}}
            <h1 class="fw-bold mb-3">

                {{ $berita->judul }}

            </h1>


            {{-- TANGGAL --}}
            <p class="text-muted mb-4">

                <i class="bi bi-calendar3 me-1"></i>

                {{ $berita->tanggal->format('d F Y') }}

            </p>


            <hr>


            {{-- ISI BERITA --}}
            <div class="mt-4">

                {!! nl2br(e($berita->isi)) !!}

            </div>

        </div>

    </div>

</div>

@endsection