<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{

    protected $table = 'shift';
    //restrict columns from modifying
    protected $primaryKey = 'id_shift';
    protected $fillable = ['shift_lapangan','jam_mulai','jam_selesai','harga'];
    protected $guarded = [];

    public function booking()
        {
            return $this->hasMany('App\Booking','id_shift');
        }
}
