<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';

    public function perumahan()
    {
        return $this->belongsTo('App\Perumahan', 'perumahan_id', 'perumahan_id');
    }
}
