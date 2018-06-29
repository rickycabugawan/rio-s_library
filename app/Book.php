<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    function user() {
        return $this->belongsToMany('App\User','favorite_books');
    }
}
