<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    // Daftar nilai untuk semua siswa (khusus guru)
    public function index()
    {
        $nilais = Nilai::with(['siswa', 'mapel'])->get();

        return view('nilai.index', compact('nilais'));
    }

    // Form input nilai
    public function create()
    {
        $kelases = Kelas::all();
        $siswas = Siswa::all();
        $mapels = Mapel::all();

        return view('nilai.create', compact('kelases', 'siswas', 'mapels'));
    }


    // Simpan nilai
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'nilai' => 'required|integer|min:0|max:100',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        Nilai::updateOrCreate(
            [
                'siswa_id' => $request->siswa_id,
                'mapel_id' => $request->mapel_id,
                'semester' => $request->semester,
                'tahun_ajaran' => $request->tahun_ajaran,
            ],
            [
                'guru_id' => Auth::id(),
                'nilai' => $request->nilai,
            ]
        );

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil disimpan.');
    }

    public function getSiswaByKelas($kelas_id)
    {
        $siswas = \App\Models\Siswa::where('kelas_id', $kelas_id)->get();
        return response()->json($siswas);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
