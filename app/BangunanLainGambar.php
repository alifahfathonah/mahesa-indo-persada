<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BangunanLainGambar extends Model
{
    //
    protected $table = 'bangunan_lain_gambar';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $keyType = null;
    public $timestamps = false;

    public function bangunan_lain() {
        return $this->belongsTo('BangunanLain');
    }
}
