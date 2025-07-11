@extends('layout.layout')

@section('konten')
    <section id="hero">
        {{-- <div class="overlay"></div> --}}

        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">Selamat Datang <br> di SMP Negeri 5 Padalarang</div>
                <h4>Sekolah yang Menciptakan Karakter Unggul dan Berprestasi</h4>
            </div>

        </div>
    </section>

    <section id="program" style="margin-top: -45px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-3" data-aos="flip-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Karakter</h5>
                        </div>
                        <img src="{{ asset('assets/img/karakter.png') }}" height="55" width="55" alt="">
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col mb-3" data-aos="flip-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Akhlak</h5>
                        </div>
                        <img src="{{ asset('assets/img/akhlak.png') }}" height="55" width="55" alt="">
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col mb-3" data-aos="flip-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Kebudayaan</h5>
                        </div>
                        <img src="{{ asset('assets/img/kebudayaan.png') }}" height="55" width="55" alt="">
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col mb-3" data-aos="flip-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Teknologi</h5>
                        </div>
                        <img src="{{ asset('assets/img/teknologi.png') }}" height="55" width="55" alt="">
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- Profil Sekolah --}}
    <section id="profil">
        <div class="container py-5">
            <div class="header-profil text-center">
                <h2 class="fw-bold">Profil Sekolah</h2>
            </div>
            <div class="text-center">
                <img src="{{ asset('assets/img/logo-smp.png') }}" height="250" width="250" alt=""
                    data-aos="zoom-in-up">
            </div>
            <div>
                <p class="profil-text mt-3" style="text-align: justify"><b>SMP Negeri 5 Padalarang</b>, merupakan
                    salah
                    satu
                    Sekolah Menengah Pertama
                    yang ada di Desa Tagog Apu, Kecamatan Padalarang, Kabupaten Bandung Barat, Provinsi Jawa Barat,
                    Indonesia. Sama dengan SMP pada umumnya di Indonesia masa pendidikan sekolah di SMPN 5 Padalarang
                    ditempuh dalam waktu tiga tahun, mulai dari Kelas VII, VIII sampai Kelas IX.</p>
            </div>
        </div>
        <div class="footer-profil text-center">
            <a href="/profil" class="btn btn-outline-danger">Lihat Profil Lengkap</a>
        </div>
    </section>

    {{-- Berita Terbaru --}}
    <section id="berita">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan Terbaru</h2>
            </div>
            <div class="row py-5" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kegiatan1.jpeg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-1 text-secondary">Tanggal</p>
                            <h4 class="fw-bold mb-3">Nama Kegiatan 1</h4>
                            <p class="text-secondary">#hashtagberita</p>
                            <a href="" class="text-decoration-none text-danger mb-3">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kegiatan2.jpeg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-1 text-secondary">Tanggal</p>
                            <h4 class="fw-bold mb-3">Nama Kegiatan 1</h4>
                            <p class="text-secondary">#hashtagberita</p>
                            <a href="" class="text-decoration-none text-danger mb-3">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kegiatan 3.jpeg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-1 text-secondary">Tanggal</p>
                            <h4 class="fw-bold mb-3">Nama Kegiatan 1</h4>
                            <p class="text-secondary">#hashtagberita</p>
                            <a href="" class="text-decoration-none text-danger mb-3">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-berita text-center">
            <a href="/berita" class="btn btn-outline-danger">Berita lainnya</a>
        </div>
    </section>

    {{-- Prestasi Sekolah --}}
    <section id="prestasi">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Prestasi Sekolah</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/prestasi1.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-prestasi">
                            <h4 class="fw-bold mb-3">Pencapaian Prestasi 1</h4>
                            <p class="text-secondary">#hashtagprestasi</p>
                            {{-- <a href="" class="text-decoration-none text-danger">Prestasi Lainnya</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/prestasi2.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            {{-- <p class="mb-1 text-secondary">Tanggal</p> --}}
                            <h4 class="fw-bold mb-3">Pencapaian Prestasi 2</h4>
                            <p class="text-secondary">#hashtagberita</p>
                            {{-- <a href="" class="text-decoration-none text-danger">Baca Selengkapnya...</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/prestasi3.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            {{-- <p class="mb-1 text-secondary">Tanggal</p> --}}
                            <h4 class="fw-bold mb-3">Pencapaian Prestasi 3</h4>
                            <p class="text-secondary">#hashtagberita</p>
                            {{-- <a href="" class="text-decoration-none text-danger">Baca Selengkapnya...</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="prestasi-berita text-center">
            <a href="/prestasi" class="btn btn-outline-danger">Prestasi lainnya</a>
        </div>
    </section>

    {{-- Galeri Foto --}}
    <section id="galeri" class="section-galeri parallax py-5" style="margin-top: 50px" data-aos="zoom-in">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Galeri Foto</h5>
                </div>
                <div>
                    <a href="/galeri" class="btn btn-outline-light">Foto lainnya</a>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/img/galeri1.jpeg') }}">
                        <img src="{{ asset('assets/img/galeri1.jpeg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/img/galeri2.jpg') }}">
                        <img src="{{ asset('assets/img/galeri2.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/img/galeri3.jpg') }}">
                        <img src="{{ asset('assets/img/galeri3.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/img/galeri4.jpg') }}">
                        <img src="{{ asset('assets/img/galeri4.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Video --}}
    <section id="video" class="py-5">
        <div class="container py-5" data-aos="flip-left">
            <div class="text-center">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/ib3ojbH4Lts?si=iEQolHRqZfldd-jg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    {{-- Video Youtube --}}
    <section id="video-youtube" class="py-5">
        <div class="container py-5">
            <div class="header-video text-center">
                <h2 class="fw-bold">Video Kegiatan Sekolah</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0 mb-3">
                        <iframe width="350" height="280"
                            src="https://www.youtube.com/embed/ib3ojbH4Lts?si=iEQolHRqZfldd-jg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 mb-3">
                        <iframe width="350" height="280"
                            src="https://www.youtube.com/embed/E0Mrc5yDBlI?si=x662DiDJbEVNUMmN"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 mb-3">
                        <iframe width="350" height="280"
                            src="https://www.youtube.com/embed/2gB6xqIEPy4?si=kSBe9H-wgmUdMuLs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-berita text-center">
            <a href="https://www.youtube.com/@smpn5padalarang" class="btn btn-outline-danger">Video lainnya</a>
        </div>
    </section>



    {{-- Fasilitas Sekolah --}}
    <section id="fasilitas" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Fasilitas Sekolah</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6 mb-3 text-center" data-aos="zoom-in">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/foto-kelas.jpg') }}" class="img-fluid foto-fasilitas mb-1"
                            alt="">
                        <h5>Ruang Kelas</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6 mb-3 text-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/foto-lab.jpg') }}" class="img-fluid foto-fasilitas mb-1"
                        alt="">
                    <h5>Ruang Laboratorium</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 mb-3 text-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/foto-multimedia.jpg') }}" class="img-fluid foto-fasilitas mb-1"
                        alt="">
                    <h5>Ruang Multimedia</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 mb-3 text-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/foto-perpustakaan.webp') }}" class="img-fluid foto-fasilitas mb-1"
                        alt="">
                    <h5>Ruang Perpustakaan</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 mb-3 text-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/foto-mesjid.jpeg') }}" class="img-fluid foto-fasilitas mb-1"
                        alt="">
                    <h5>Mesjid Sekolah</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 mb-3 text-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/foto-uks.jpg') }}" class="img-fluid foto-fasilitas mb-1"
                        alt="">
                    <h5>Ruang UKS</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
