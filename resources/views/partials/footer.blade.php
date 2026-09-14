<footer class="school-footer mt-5">
    <div class="container py-5">
        <div class="row g-4">

            {{-- IDENTITAS SEKOLAH --}}
            <div class="col-lg-5">

                {{-- LOGO + NAMA SEKOLAH --}}
                <div class="d-flex align-items-center mb-3">

                    <div
                        style="
                            width: 80px;
                            height: 80px;
                            background: #ffffff;
                            border-radius: 12px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            padding: 5px;
                            flex-shrink: 0;
                            margin-right: 15px;
                        "
                    >

                        <img
                            src="{{ asset('assets/images/logo_smk.jpg') }}"
                            alt="Logo SMK Al Falah Tanjungjaya"
                            style="
                                width: 70px;
                                height: 70px;
                                object-fit: contain;
                                display: block;
                            "
                        >

                    </div>

                    <div>
                        <h4 class="fw-bold mb-1">
                            SMK Al Falah Tanjungjaya
                        </h4>

                        <small class="text-white-50">
                            Sekolah Unggul, Berkarakter, dan Kompeten
                        </small>
                    </div>

                </div>

                <p class="mb-0 text-white-50">
                    Website resmi SMK Al Falah Tanjungjaya.
                    Menjadi sekolah yang unggul, berkarakter,
                    berkompetensi, dan siap menghadapi dunia kerja
                    serta perkembangan teknologi.
                </p>

            </div>


            {{-- NAVIGASI --}}
            <div class="col-lg-3 col-md-6">

                <h5 class="fw-bold mb-3">
                    Navigasi
                </h5>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="{{ route('home') }}"
                           class="text-white-50 text-decoration-none">
                            Beranda
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('profil.index') }}"
                           class="text-white-50 text-decoration-none">
                            Profil Sekolah
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('program-keahlian.index') }}"
                           class="text-white-50 text-decoration-none">
                            Program Keahlian
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('ekstrakurikuler.index') }}"
                           class="text-white-50 text-decoration-none">
                            Ekstrakurikuler
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('berita.index') }}"
                           class="text-white-50 text-decoration-none">
                            Berita & Kegiatan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('galeri.index') }}"
                           class="text-white-50 text-decoration-none">
                            Galeri
                        </a>
                    </li>

                </ul>

            </div>


            {{-- HUBUNGI KAMI --}}
            <div class="col-lg-4 col-md-6">

                <h5 class="fw-bold mb-3">
                    Hubungi Kami
                </h5>

                <p class="text-white-50 mb-2">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    Tanjungjaya, Kabupaten Tasikmalaya
                </p>

                <p class="text-white-50 mb-2">
                    <i class="bi bi-envelope-fill me-2"></i>
                    info@smkalfalahtanjungjaya.sch.id
                </p>

                <p class="text-white-50 mb-0">
                    <i class="bi bi-telephone-fill me-2"></i>
                    Informasi Sekolah
                </p>

            </div>

        </div>
    </div>


    {{-- COPYRIGHT --}}
    <div class="border-top border-secondary">

        <div class="container py-3 text-center">

            <small class="text-white-50">
                © {{ date('Y') }} SMK Al Falah Tanjungjaya.
                Semua Hak Dilindungi.
            </small>

        </div>

    </div>

</footer>