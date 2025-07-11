@extends('layout.layout')

@section('konten')
    <section id="detail-berita" style="margin-top: 50px" class="py-5">
        <div class="container col-xxl-8">
            <div class="mb-3">
                Home / Berita / Berita 1
            </div>
            <img src="{{ asset('assets/img/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
            <div class="konten-berita">
                <p class="mb-1 text-secondary">Tanggal</p>
                <h4 class="fw-bold mb-3">Nama Kegiatan 1</h4>
                <p class="text-secondary">Sekolah merupakan lembaga pendidikan kelompok pendidikan dasar dan menengah di
                    jajaran kementrian pendidikan nasional. Kegiatan utama di lembaga ini adalah penyelenggaraan proses
                    belajar dan mengajar, di ruang kelas maupun luar ruang kelas. Bentuk pelaksanaannya berupa kegiatan
                    intrakurikuler dan ekstrakurikuler. Kegiatan intrakurikuler merupakan kegiatan belajar tatap muka dalam
                    alokasi waktu yang sudah diatur dalam struktur dan muatan kurikulum.

                    Kegiatan ekstrakurikuler merupakan kegiatan penunjang pembelajaran yang dilaksanakan di luar jam tatap
                    muka. Meskipun demikian, kegiatan ini mendatangkan kesenangan dan keasyikan tersendiri bagi siswa. Boleh
                    jadi sebagai ajang dan wahana menciptakan suasana dan nuansa baru bagi siswa untuk meningkatkan prestasi
                    belajar akademis.

                    Pada hakikatnya kegiatan ini bertujuan untuk membantu perkembangan siswa sesuai kebutuhan, potensi,
                    bakat dan minat siswa. Diasumsikan bahka setiap siswa akan memiliki kebutuhan, potensi, bakat dan minat
                    yang berbeda. Oleh sebab itu siswa boleh memilih kegiatan apa yang cocok dengan dirinya. Namun demikian,
                    sekolah telah melakukan penelusuran dan penjaringan terhadap kebutuhan siswa tersebut sehingga sekolah
                    bisa menentukan bentuk kegiatan yang akan dilaksanakan di sekolah.</p>
            </div>
        </div>
    </section>
@endsection
