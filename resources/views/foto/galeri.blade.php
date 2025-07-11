@extends('layout.layout')

@section('konten')
    {{-- Galeri Foto --}}
    <section id="galeri" class="section-galeri parallax py-5" style="margin-top: 50px" data-aos="zoom-in">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Galeri Foto</h5>
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
@endsection
