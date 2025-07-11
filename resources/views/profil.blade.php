@extends('layout.layout')

@section('konten')
    <div class="container">
        <div class="row g-5">
            <div class="col-md-8">


                <div class="container py-5" style="margin-top: 50px">
                    <div class="header-profil text-center">
                        <h2 class="fw-bold">Profil Sekolah</h2>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('assets/img/logo-smp.png') }}" height="250" width="250" alt=""
                            data-aos="zoom-in-up">
                    </div>
                    <div>
                        <p class="mt-3" style="text-align: justify; font-size: 18px"><b>SMP Negeri 5 Padalarang</b>,
                            merupakan salah
                            satu Sekolah Menengah Pertama yang ada di Desa Tagog Apu, Kecamatan Padalarang, Kabupaten
                            Bandung Barat,
                            Provinsi Jawa Barat, Indonesia. Memiliki akreditasi A, SMP Negeri 5 Padalarang menjadi salah
                            satu sekolah
                            unggulan di Kabupaten Bandung Barat. Meskipun masih tergolong baru, SMP Negeri 5 Padalarang
                            telah dikenal
                            luas atas pencapaian prestasinya di berbagai bidang, termasuk akademik, olahraga, seni, dan
                            budaya. </p>
                        <br>

                        <h4 class="fw-bold text-center mt-3">Visi Sekolah</h4>

                        <p class="profil-text mt-3 text-center">“Terwujudnya Peserta Didik yang Cerdas, Cakap, Berbudaya,
                            dan Cinta Lingkungan dengan Semangat Profil Pelajar Pancasila
                        </p><br>
                        <h5 style="font-weight: bold">Indikator :</h5>
                        <ol style="text-align: justify; font-size: 18px">
                            <li>Terwujudnya lulusan yang berprestasi baik bidang akademik dan non akademik.</li>
                            <li>Terwujudnya lulusan yang cakap dan terampil.</li>
                            <li>Terwujudnya peserta didik yang menjunjung tinggi budaya local dan nasional.</li>
                            <li>Terwujudnya peserta didik yang cinta lingkungan.</li>
                            <li>Terwujudnya profil pelajar Pancasila yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.
                            </li>
                        </ol>
                        <br>

                        <h4 class="fw-bold text-center mt-3">Misi Sekolah</h4>

                        <ol style="text-align: justify; font-size: 18px;">
                            <li>Mewujudkan lulusan yang berprestasi baik bidang akademik maupun non-akademik.</li>
                            <li>Mewujudkan lulusan yang cakap dan terampil sesuai dengan perkembangan zaman.</li>
                            <li>Mewujudkan peserta didik yang menjunjung tinggi budaya lokal dan nasional.</li>
                            <li>Mewujudkan peserta didik mencintai dan menjaga lingkungan agar tetap bersih, aman, ramah,
                                indah,
                                inklusif, sehat, asri, dan nyaman.</li>
                            <li>Mewujudkan peserta didik yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa dan berakhlak
                                mulia,
                                berbhineka global, bergotong royong, mandiri, bernalar kritis, dan kreatif.</li>
                        </ol><br>


                        <h5 style="font-weight: bold">Prestasi Akademik</h5>
                        <ul style="text-align: justify; font-size: 18px">
                            <li>
                                Olimpiade Sains Nasional (OSN) : Siswa SMP Negeri 5 Padalarang secara rutin berpartisipasi
                                dan meraih
                                prestasi di ajang OSN, menunjukkan keunggulan dalam bidang sains dan teknologi
                            </li>
                        </ul>
                        <br>

                        <h5 style="font-weight: bold">Prestasi Non-Akademik</h5>
                        <ul style="text-align: justify; font-size: 18px">
                            <li>
                                Olimpiade Olahraga Siswa Nasional (O2SN) : Siswa-siswi SMP Negeri 5 Padalarang aktif dalam
                                berbagai
                                cabang olahraga dan telah meraih medali di tingkat kabupaten, kota, dan provinsi, termasuk
                                sepakbola dan
                                basket.
                            </li>
                            <li>Festival dan Lomba Seni Siswa Nasional (FLS2N) : SMP Negeri 5 Padalarang juga menonjol dalam
                                bidang
                                seni, dengan siswa yang berprestasi dalam lomba-lomba seperti musik, tari, dan seni rupa di
                                tingkat
                                kabupaten, kota, dan provinsi.</li>
                            <li>Gala Siswa Indonesia (GSI) : SMP Negeri 5 Padalarang mendukung partisipasi siswa dalam GSI,
                                ajang yang
                                menggabungkan seni, olahraga, dan budaya, untuk mengembangkan bakat dan karakter siswa.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5 py-2">
                <div class="container" style="margin-top: 100px">
                    <img src="{{ asset('assets/img/kepsek.jpg') }}" class="img-fluid mb-3" alt="">
                    <p class="text-center" style="font-size: 20px"><b>Hj. Mardiah As'ad, M.Pd.</b><br>Kepala SMP Negeri 5
                        Padalarang</p><br>
                </div>
                <div class="container">
                    <p style="text-align: center"><b>Assalamu’alaikum Wr. Wb</b></p>
                    <p style="text-align: center">Selamat datang di website resmi<br>SMP Negeri 5 Padalarang</p>
                    <p style="text-align: justify">
                        Melalui website ini, semoga dapat memberikan layanan komunikasi serta memenuhi harapan masyarakat
                        dan
                        pihak-pihak yang berkepentingan. Tujuan utama website ini adalah sebagai media informasi kepada
                        masyarakat luas tentang keberadaan sekolah.</p>
                    <p>Kami berharap website ini bisa memberikan manfaat
                        yang seluas-luasnya kepada dunia pendidikan, serta
                        masyarakat luas pada umumnya.</p>
                </div>
                <div>
                    <h4 class="highlight-heading mb-3">IDENTITAS SEKOLAH</h4>
                    <table class=" table table-striped-columns">

                        <tbody>
                            <tr>
                                <td>NPSN</td>
                                <td>20279861</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Negeri</td>
                            </tr>
                            <tr>
                                <td>Bentuk Pendidikan</td>
                                <td>SMP</td>
                            </tr>
                            <tr>
                                <td>SK Pendirian Sekolah</td>
                                <td>0004/2109-DSDIKPORA/2009</td>
                            </tr>
                            <tr>
                                <td>Tanggal SK Pendirian</td>
                                <td>2009-07-01</td>
                            </tr>
                            <tr>
                                <td>SK Izin Operasional</td>
                                <td>421/KEP.381-DISDIKPORA/20</td>
                            </tr>
                            <tr>
                                <td>Tanggal SK Izin Operasional</td>
                                <td>24-10-2011</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div>
                    <h4 class="highlight-heading mb-3">KEGIATAN EKSTRAKURIKULER</h4>
                    <ul>
                        <li>Organisasi Siswa Intra Sekolah (OSIS)</li>
                        <li>Ikatan Remaja Mesjid Ar-Rahman</li>
                        <li>Keagamaan</li>
                        <li>Pramuka</li>
                        <li>Palang Merah Remaja</li>
                        <li>Paskibra</li>
                        <li>Tari Jaipong</li>
                        <li>Cinematography</li>
                        <li>Paduan Suara</li>
                        <li>English Fun Club</li>
                        <li>Sains Preneur</li>
                        <li>SmarTeens</li>
                        <li>Futsal Putra</li>
                        <li>Futsal Putri</li>
                        <li>Voli</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
