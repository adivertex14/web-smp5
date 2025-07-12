<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="shortcut icon" href={{ asset('assets/icons/logo-smp.ico') }}>
    <title>Web SMPN 5 Padalarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

    {{-- summernote --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- Navbar --}}
    @include('layout.navbar')

    {{-- Konten --}}
    @yield('konten')

    {{-- pra-footer --}}
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Profil</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Berita</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Galeri</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Kontak</a>
                                </li>
                            </ul>
                            {{-- <ul class="nav flex-column me-5">
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Profil</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Berita</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Prestasi</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Galeri</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Kontak</a>
                            </li>
                        </ul> --}}
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                        <div class="d-flex">
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/img/icon-facebook.png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/img/icon-instagram.png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/img/icon-youtube.png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/img/icon-tiktok.png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Kontak</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">smpn5padalarang@gmail.com</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">sim.smpn5pdl@gmail.com</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">085215324945</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Alamat</h5>
                        <p class="text-muted"> Jl. Kp. Parigi, RT.02/RW.10, Tagog Apu Padalarang, Bandung Barat, Jawa
                            Barat, Indonesia</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    {{-- footer --}}
    <section class="bg-light border-top py-3">
        <div class="container-py-3 text-center">
            <h5>Project UTS Pemrograman Web 2</h5>
            <h6>Adi Supriatna | 22552011132 | TIF-K22</h6>
            &copy; 2025
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- <script src="//ajax/googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    {{-- script summernote --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };
        // Animasi AOS
        AOS.init();

        // Magnific
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script>

    {{-- summernote --}}
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300
            });
        });
    </script>

    @yield('scripts')


</body>

</html>
