<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model{


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function stories(){
        return $this->hasMany('App\Models\Storie');

    }
}
