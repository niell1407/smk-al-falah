@extends('layouts.app')

@section('title', $jurusan['nama'])

@section('content')

<section class="py-5">

    <div class="container">

        <a href="{{ route('program-keahlian.index') }}"
           class="btn btn-outline-primary rounded-pill mb-4">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>


        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            {{-- FOTO --}}

            @if($foto && $foto->foto)

                <img
                    src="{{ asset('storage/' . $foto->foto) }}"
                    alt="{{ $jurusan['nama'] }}"
                    style="
                        width:100%;
                        height:380px;
                        object-fit:cover;
                    "
                >

            @else

                <div
                    class="d-flex align-items-center justify-content-center"
                    style="
                        height:380px;
                        background:#eaf6fc;
                    "
                >

                    <i class="bi bi-mortarboard-fill"
                       style="
                           font-size:90px;
                           color:#176b9d;
                       ">
                    </i>

                </div>

            @endif


            <div class="card-body p-5">

                <div class="text-center mb-4">

                    <h1 class="fw-bold text-primary">
                        {{ $jurusan['singkatan'] }}
                    </h1>

                    <h3 class="fw-semibold">
                        {{ $jurusan['nama'] }}
                    </h3>

                </div>


                <hr>


                <h5 class="fw-bold mt-4">
                    <i class="bi bi-info-circle text-primary me-2"></i>
                    Tentang Jurusan
                </h5>

                <p class="text-muted">
                    {{ $jurusan['deskripsi'] }}
                </p>


                <h5 class="fw-bold mt-4">
                    <i class="bi bi-briefcase text-primary me-2"></i>
                    Prospek Kerja
                </h5>

                <div class="row g-3 mt-1">

                    @foreach($jurusan['prospek'] as $item)

                        <div class="col-md-4">

                            <div class="p-3 rounded-3"
                                 style="background:#eaf6fc;">

                                <i class="bi bi-check-circle-fill text-primary me-2"></i>

                                {{ $item }}

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

@endsection