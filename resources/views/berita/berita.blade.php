@extends('layout.layout')

@section('konten')
    {{-- Berita Terbaru --}}
    <section id="berita">
        <div class="container py-5" style="margin-top: 50px">
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
        {{-- <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Berita lainnya</a>
        </div> --}}
    </section>
@endsection
