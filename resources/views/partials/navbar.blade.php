<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">

        {{-- LOGO + NAMA SEKOLAH --}}
        <a class="navbar-brand d-flex align-items-center"
           href="{{ route('home') }}">

            <img src="{{ asset('assets/images/logo_smk.jpg') }}"
                 alt="Logo SMK Al Falah Tanjungjaya"
                 style="
                    width: 55px;
                    height: 55px;
                    object-fit: contain;
                    margin-right: 10px;
                 ">

            <div class="d-flex flex-column">
                <span class="fw-bold"
                      style="color: #1677c8; font-size: 18px; line-height: 1.2;">
                    SMK Al Falah
                </span>

                <small style="color: #555;">
                    Tanjungjaya
                </small>
            </div>

        </a>


        {{-- TOMBOL MOBILE --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        {{-- MENU --}}
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                {{-- BERANDA --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>


                {{-- PROFIL SEKOLAH --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('profil.index') }}">
                        Profil Sekolah
                    </a>
                </li>


                {{-- PROGRAM KEAHLIAN --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('program-keahlian.index') }}">
                        Program Keahlian
                    </a>
                </li>


                {{-- EKSTRAKURIKULER --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('ekstrakurikuler.index') }}">
                        Ekstrakurikuler
                    </a>
                </li>


                {{-- GALERI --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('galeri.index') }}">
                        Galeri
                    </a>
                </li>


                {{-- BERITA & KEGIATAN --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('berita.index') }}">
                        Berita & Kegiatan
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<style>
    .navbar-brand {
        text-decoration: none;
    }

    .navbar-brand img {
        transition: 0.3s ease;
    }

    .navbar-brand:hover img {
        transform: scale(1.05);
    }

    .navbar .nav-link {
        color: #333;
        font-weight: 500;
        margin-left: 8px;
        margin-right: 8px;
        transition: 0.3s ease;
    }

    .navbar .nav-link:hover {
        color: #1677c8;
    }

    .navbar .nav-link.active {
        color: #1677c8;
        font-weight: 600;
    }

    @media (max-width: 991px) {

        .navbar .nav-link {
            margin: 5px 0;
        }

        .navbar-brand img {
            width: 48px !important;
            height: 48px !important;
        }

        .navbar-brand span {
            font-size: 16px !important;
        }
    }
</style>