<?php

namespace Database\Seeders;

use App\Models\Mimin;
use Illuminate\Database\Seeder;

class MiminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mimin::create([
            // 'id_admin' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('54321'),
            'level' => 'admin',
        ]);
    }
}
