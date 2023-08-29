<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[1],
            'email' => $row[2],
            'level' => $row[3],
            'kelas' => $row[4],
            'password' => $row[5],
            'nis' => $row[6],
            'jk' => $row[7],
        ]);

    }
}
