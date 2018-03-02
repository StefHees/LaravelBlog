<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
