<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded =['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function masyarakat()
    {
        return $this->hasMany(Masyarakat::class, 'user_id');
    }

    public function petugas()
    {
        return $this->hasMany(Petugas::class, 'user_id');
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
