<?php

namespace Database\Seeders;

use App\Models\Voting;
use Illuminate\Database\Seeder;

class VotingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voting::create([
            'user_id' => '1',
            'kandidat_id' => '1',
        ]);
    }
}
