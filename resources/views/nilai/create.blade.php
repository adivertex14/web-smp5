@extends('layout.layout') {{-- sesuaikan dengan layout kamu --}}

@section('konten')
    <section class="py-5" style="margin-top: 100px">
        <div class="container">
            <h4>Input Nilai Siswa</h4>

            <form action="{{ route('nilai.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Pilih Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-control">
                        <option value="">-- Pilih Kelas --</option>
                        @foreach ($kelases as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="siswa_id" class="form-label">Nama Siswa</label>
                    <select id="siswa_id" name="siswa_id" class="form-control">
                        <option value="">-- Pilih Siswa --</option>
                    </select>
                </div>


                <div class="row">
                    @foreach ($mapels as $mapel)
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ $mapel->nama_mapel }}</label>
                                <input type="hidden" name="mapel_id[]" value="{{ $mapel->id }}">
                                <input type="number" name="nilai[]" class="form-control"
                                    placeholder="Isi Nilai {{ $mapel->nama_mapel }}" min="0" max="100">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select name="semester" class="form-control" required>
                        <option value="">-- Pilih Semester --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tahun_ajaran" class="form-label">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control" placeholder="2024/2025" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#kelas_id').change(function() {
                var kelasId = $(this).val();

                $('#siswa_id').html('<option value="">Loading...</option>');

                if (kelasId) {
                    $.ajax({
                        url: '/siswa-by-kelas/' + kelasId,
                        type: 'GET',
                        success: function(data) {
                            let options = '<option value="">-- Pilih Siswa --</option>';
                            data.forEach(function(siswa) {
                                options +=
                                    `<option value="${siswa.id}">${siswa.nama}</option>`;
                            });
                            $('#siswa_id').html(options);
                        },
                        error: function() {
                            $('#siswa_id').html(
                                '<option value="">Gagal mengambil data</option>');
                        }
                    });
                } else {
                    $('#siswa_id').html('<option value="">-- Pilih Siswa --</option>');
                }
            });
        });
    </script>
@endsection
