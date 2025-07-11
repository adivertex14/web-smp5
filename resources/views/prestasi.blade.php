@extends('layout.layout')

@section('konten')
    <div class="container py-5" style="margin-top: 50px">
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
@endsection
