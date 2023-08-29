<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kandidat::create([
            'nama_ketos' => 'Pasha',
            'kelas_ketos' => 'XI PPLG 2',
            'nama_waketos' => 'Shapa',
            'kelas_waketos' => 'XI PPLG 1',
            'fotoprofil_ketos' => 'img/195230cc-782c-479f-bbac-ae33e71f44e8.jpg',
            'fotoprofil_waketos' => 'img/195230cc-782c-479f-bbac-ae33e71f44e8.jpg',
            'foto_kandidat' => 'img/195230cc-782c-479f-bbac-ae33e71f44e8.jpg',
            'visi' => 'cobaajaahduhaiwdhuahushdhwhuahsuidhuwahshudhuwahushduidwhuahsdhuashud',
            'misi' => 'asdadwhashjdhwhahkshkhdwukajshjdkwahukskhhuaksjhdjwhkahsjhduwka',
        ]);
    }
}
