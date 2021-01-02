<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    //
    protected $table = 'rumah';
    protected $primaryKey = 'rumah_id';

    public function gambar()
    {
        return $this->hasMany('App\RumahGambar', 'rumah_id', 'rumah_id');
    }

    public function fasilitas()
    {
        return $this->hasMany('App\RumahFasilitas', 'rumah_id', 'rumah_id');
    }

    public function perumahan()
    {
        return $this->belongsTo('App\Perumahan', 'perumahan_id', 'perumahan_id');
    }
}
