<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class User extends Eloquent
{
    protected $connection = 'mongodb';



    

    public function Stories()
    {
        return $this->hasMany('App\Models\Storie');
    }
}
