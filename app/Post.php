<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function reviews(){
        return $this->hasMany('App\Reviews');
    }

    public function comments(){
        return $this->hasMany('App\Comments');
    }

    public function category(){
        return $this->belongsTo('App\Categories');
    }
}
