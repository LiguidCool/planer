<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bts extends Model
{
    protected $connection = 'mysql';

    public function details()
    {
        return $this->hasOne('App\BtsEc', 'btsId');
    }
}
