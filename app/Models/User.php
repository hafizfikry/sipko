<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'user';
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'kelas',
        'nis',
        'jk',
        'has_voted'
    ];

    /**
     * Mutator untuk meng-encrypt password sebelum disimpan ke dalam database.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        
    public function votings()
    {
        return $this->hasMany(Voting::class);
    }

    /**
     * Check if the user has voted
     *
     * @return bool
     */
    public function hasVoted()
    {
        return $this->votings()->exists();
    }
    
    /**
     * Set the user's voting status to true
     *
     * @return void
     */
    public function setHasVoted()
    {
        $this->has_voted = true;
        $this->save();
    }
}
