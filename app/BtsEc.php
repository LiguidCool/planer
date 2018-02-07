<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BtsEc extends Model
{
    protected $table = 'ec_bts_basic';
    protected $connection = 'ec';
    protected $primaryKey = 'btsId';

    public function planerData()
    {
        return $this->belongsTo('App\Bts', 'btsId');
    }
}
