<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
class Storie extends Model{
    protected $connection = 'mongodb';
    public function utente()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function like()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function report()
    {
        return $this->hasMany('App\Models\Report');
    }

}
