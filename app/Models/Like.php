<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Like extends Model
{
    protected $connection = 'mongodb';
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function story(){

        return $this->belongsTo('App\Models\Storie', 'foreign_key', 'id_storia');
    }
}
