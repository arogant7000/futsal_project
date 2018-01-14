<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $primaryKey = 'id_karyawan';

    protected $fillable = [
        'nama_karyawan', 'email','username', 'password','status_karyawan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pembayaran()
        {
            return $this->hasMany('App\Pembayaran','id_karyawan');
        }
}
