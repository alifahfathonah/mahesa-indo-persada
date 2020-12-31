<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahGambar extends Model
{
    //
    protected $table = 'rumah_gambar';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $keyType = null;
    public $timestamps = false;

    public function rumah() {
        return $this->belongsTo('Rumah');
    }
}
