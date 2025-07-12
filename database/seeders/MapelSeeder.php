<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    public function run()
    {
        DB::table('mapels')->insert([
            ['nama_mapel' => 'Pendidikan Agama dan Budi Pekerti', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Pendidikan Pancasila', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Matematika', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Bahasa Indonesia', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Bahasa Inggris', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Ilmu Pengetahuan Alam', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Ilmu Pengetahuan Sosial', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Pendidikan Jasmani dan Olahraga Kesehatan', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Seni Budaya dan Prakarya', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Informatika', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Seni Musik', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'PJOK', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
