<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    //
    protected $table = 'perumahan';
    protected $primaryKey = 'perumahan_id';

    public function rumah()
    {
        return $this->hasMany('App\Rumah', 'perumahan_id', 'perumahan_id');
    }

    public function gambar()
    {
        return $this->hasMany('App\PerumahanGambar', 'perumahan_id', 'perumahan_id');
    }
}
