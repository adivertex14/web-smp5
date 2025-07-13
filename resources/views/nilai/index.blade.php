@extends('layout.layout')



@section('konten')
    <section class="py-5" style="margin-top: 100px">
        <div class="container">
            <h4>Daftar Nilai Siswa</h4>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @php
                $userRole = Auth::user()->role;
            @endphp

            @if ($userRole === 'guru' || $userRole === 'admin')
                <a href="{{ route('nilai.create') }}" class="btn btn-primary">Input Nilai</a>
            @endif

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
    </section>
@endsection
