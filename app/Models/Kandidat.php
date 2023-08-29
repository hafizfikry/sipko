<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $guard = 'kandidat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_ketos',
        'kelas_ketos',
        'nama_waketos',
        'kelas_waketos',
        'visi',
        'misi',
        'fotoprofil_ketos',
        'fotoprofil_waketos',
        'foto_kandidat',
    ];

    public function votings()
    {
        return $this->hasMany(Voting::class);
    }
}
