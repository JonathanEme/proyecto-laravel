<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';


    //relacion many to one muchos a uno

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }


    //relacion many to one muchos a uno

    public function image(){
        return $this->belongsTo('App\Models\Image', 'image_id');
    }

}
