<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';
    protected $fillable = ['tanggal'];
    protected $guarded = [];


    public function shift(){

            return $this->belongsTo('App\Shift','id_shift');

    }
}
