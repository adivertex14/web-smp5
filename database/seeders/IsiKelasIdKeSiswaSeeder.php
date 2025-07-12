<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;

class IsiKelasIdKeSiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Mapping nama kelas ke id secara eksplisit (hardcoded)
        $kelasMap = [
            'VII A' => 1,
            'VII B' => 2,
            'VII C' => 3,
            'VIII A' => 4,
            'VIII B' => 5,
            'VIII C' => 6,
            'IX A' => 7,
            'IX B' => 8,
            'IX C' => 9
        ];

        $siswas = Siswa::all();

        foreach ($siswas as $siswa) {
            if (isset($kelasMap[$siswa->kelas])) {
                $siswa->kelas_id = $kelasMap[$siswa->kelas];
                $siswa->save();
            }
        }
    }
}
