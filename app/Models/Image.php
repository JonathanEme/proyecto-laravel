<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //relacion one to many uno a mucho

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }


    // relacion one to many uno a muchos

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }



    //relacion many to one muchos a uno

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
