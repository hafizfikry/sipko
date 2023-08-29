<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Kandidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = 
    ['user_id', 'kandidat_id'];

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class);
    }
    
        //buat ngecek siswa
    public function hasVoted()
    {
        return $this->user->votings()->where('kandidat_id', $this->kandidat_id)->exists();
    }
    
    public function setHasVoted()
    {
        $this->user->votes()->create([
            'kandidat_id' => $this->kandidat_id
        ]);
    }
    public function isVotingOpen()
    {
        return Carbon::now()->lte($this->end_time);
    }


}
