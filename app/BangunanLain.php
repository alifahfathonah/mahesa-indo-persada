<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BangunanLain extends Model
{
    //
    protected $table = 'bangunan_lain';
    protected $primaryKey = 'bangunan_lain_id';

    public function gambar()
    {
        return $this->hasMany('App\BangunanLainGambar', 'bangunan_lain_id', 'bangunan_lain_id');
    }
}
