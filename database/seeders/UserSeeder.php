<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'coba3',
                'email' => 'coba3@gmail.com',
                'password' => bcrypt('1231231231'),
                'level' => 'siswa',
                'kelas' => 'XI PPLG 1',
                'nis' => '1231231231',
                'jk' => 'Perempuan',
            ]);
    }
}
