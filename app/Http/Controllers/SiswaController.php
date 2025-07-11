<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $method = $request->route()->getActionMethod();

            if (in_array($method, ['index', 'show'])) {
                return $next($request);
            }

            if (Auth::user()->role !== 'admin') {
                abort(403, 'Akses ditolak. Hanya admin.');
            }

            return $next($request);
        });
    }

    public function index(Request $request)
    {
        // Ambil kelas yang tersedia    
        $daftarKelas = Siswa::select('kelas')->distinct()->pluck('kelas');

        // Cek apakah ada filter kelas dari dropdown
        $kelasTerpilih = $request->get('kelas');

        // ambil data siswa hanya jika kelas telah dipilih 
        $siswa = [];

        if ($kelasTerpilih) {
            $siswa = Siswa::where('kelas', $kelasTerpilih)->get();
        }

        return view('siswa.index', compact('siswa', 'daftarKelas', 'kelasTerpilih'));

        // $siswa = Siswa::all();
        // return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        // hanya admin
    }

    public function store(Request $request)
    {
        // hanya admin
    }

    public function show($id)
    {
        // bisa dilihat semua
    }

    public function edit($id)
    {
        // hanya admin
    }

    public function update(Request $request, $id)
    {
        // hanya admin
    }

    public function destroy($id)
    {
        // hanya admin
    }
}
