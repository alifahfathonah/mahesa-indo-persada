<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerumahanGambar extends Model
{
    //
    protected $table = 'perumahan_gambar';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $keyType = null;
    public $timestamps = false;

    public function perumahan() {
        return $this->belongsTo('Perumahan');
    }
}
