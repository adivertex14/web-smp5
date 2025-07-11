@extends('layout.layout')

@section('konten')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h4>Data Siswa</h4>

            <form method="GET" action="{{ route('siswa.index') }}" class="mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <select name="kelas" class="form-select" onchange="this.form.submit()">
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($daftarKelas as $kelas)
                                <option value="{{ $kelas }}" {{ $kelas == $kelasTerpilih ? 'selected' : '' }}>
                                    {{ $kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>

            @auth
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
                @endif
            @endauth


            <div class="table-responsive py-3">

                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            @if (auth()->user()->role === 'admin')
                                <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->kelas }}</td>
                                @if (auth()->user()->role === 'admin')
                                    <td>
                                        <a href="{{ route('siswa.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
