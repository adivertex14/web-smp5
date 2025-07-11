{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-1 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo-smp.png') }}" height="55" width="55" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/prestasi">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/galeri">Galeri</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dataSekolahDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Data Sekolah
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dataSekolahDropdown">
                            <li><a class="dropdown-item" href="{{ route('siswa.index') }}">Data Siswa</a></li>
                            <li><a class="dropdown-item" href="{{ route('guru.index') }}">Data Guru</a></li>
                            <li><a class="dropdown-item" href="{{ route('nilai.index') }}">Nilai Rapor</a></li>
                        </ul>
                    </li>
                @endauth


            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                @else
                    {{-- <button class="btn btn-danger">Login</button> --}}
                    <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- End of Navbar --}}
