@extends('layout.layout')

@section('konten')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Selamat Datang di Halaman Dashboard Admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/img/foto-artikel.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text">Kelola Artikel Sekolah</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/img/foto-kegiatan.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Foto Kegiatan</h5>
                            <p class="card-text">Kelola Galeri Foto</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/img/foto-kegiatan.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Foto Kegiatan</h5>
                            <p class="card-text">Kelola Galeri Foto</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
