<php?
use Illuminate\Support\Str;
php>
 @extends('layouts.app')

@section('title', 'Berita & Kegiatan')

@section('content')

<div class="container py-5">

    {{-- HEADER --}}
    <div class="text-center mb-5">

        <span class="badge rounded-pill px-3 py-2 mb-3"
              style="background-color: #e8f4ff; color: #1677c8;">
            BERITA & KEGIATAN
        </span>

        <h1 class="fw-bold">
            Berita & Kegiatan Sekolah
        </h1>

        <p class="text-muted">
            Informasi terbaru dan kegiatan SMK Al Falah Tanjungjaya
        </p>

    </div>


    {{-- DAFTAR BERITA --}}
    <div class="row g-4">

        @forelse ($berita as $item)

            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- FOTO --}}
                    @if ($item->foto)

                        <img src="{{ asset('storage/' . $item->foto) }}"
                             alt="{{ $item->judul }}"
                             class="w-100"
                             style="height: 210px; object-fit: cover;">

                    @else

                        <div class="d-flex align-items-center justify-content-center"
                             style="height: 210px; background-color: #eaf6ff;">

                            <i class="bi bi-newspaper"
                               style="font-size: 70px; color: #1677c8;"></i>

                        </div>

                    @endif


                    {{-- ISI CARD --}}
                    <div class="card-body p-4">

                        {{-- KATEGORI --}}
                        @if ($item->kategori)

                            <span class="badge mb-2"
                                  style="background-color: #e8f4ff; color: #1677c8;">
                                {{ $item->kategori }}
                            </span>

                        @endif


                        {{-- JUDUL --}}
                        <h5 class="fw-bold">
                            {{ $item->judul }}
                        </h5>


                        {{-- TANGGAL --}}
                        <small class="text-muted d-block mb-2">
                            <i class="bi bi-calendar3 me-1"></i>

                            {{ $item->tanggal->format('d F Y') }}
                        </small>


                        {{-- DESKRIPSI --}}
                        <p class="text-muted">
                            {{ \Illuminate\Support\Str::limit($item->isi, 120) }}
                        </p>


                        {{-- TOMBOL --}}
                        <a href="{{ route('berita.show', $item->id) }}"
                           class="btn btn-outline-primary rounded-pill">

                            Selengkapnya

                            <i class="bi bi-arrow-right ms-1"></i>

                        </a>

                    </div>

                </div>

            </div>

        @empty

            {{-- JIKA BELUM ADA BERITA --}}
            <div class="col-12">

                <div class="text-center py-5">

                    <i class="bi bi-newspaper"
                       style="font-size: 60px; color: #1677c8;"></i>

                    <h4 class="fw-bold mt-3">
                        Belum Ada Berita
                    </h4>

                    <p class="text-muted">
                        Belum ada berita atau kegiatan sekolah yang dipublikasikan.
                    </p>

                </div>

            </div>

        @endforelse

    </div>

</div>

@endsection