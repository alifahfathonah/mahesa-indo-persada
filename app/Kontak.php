<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    //
    protected $table = 'kontak';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $keyType = null;
    protected $guarded = [];
    public $timestamps = false;
}
