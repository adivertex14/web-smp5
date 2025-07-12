@extends('layout.layout')



@section('konten')
    <div class="container">
        <h4>Daftar Nilai Siswa</h4>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">+ Input Nilai</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                    <th>Semester</th>
                    <th>Tahun Ajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilais as $nilai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $nilai->siswa->nama ?? '-' }}</td>
                        <td>{{ $nilai->mapel->nama_mapel ?? '-' }}</td>
                        <td>{{ $nilai->nilai }}</td>
                        <td>{{ $nilai->semester }}</td>
                        <td>{{ $nilai->tahun_ajaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
