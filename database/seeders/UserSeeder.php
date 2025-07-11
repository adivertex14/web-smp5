<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' =>   'Admin',
                'email' => 'admin@email.com',
                'password' => \bcrypt('admin123'),
                'role' => 'admin'

            ],
            [
                'name' =>   'guru1',
                'email' => 'guru1@email.com',
                'password' => \bcrypt('guru123'),
                'role' => 'guru'

            ],
            [
                'name' =>   'siswa1',
                'email' => 'siswa1@email.com',
                'password' => \bcrypt('siswa123'),
                'role' => 'siswa'

            ],
        ];
        User::insert($user);
    }
}
