<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{
    protected $connection = 'mongodb';
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function story(){
        return $this->belongsTo('App\Models\Storie', 'foreign_key', 'storie_id');
    }
}
