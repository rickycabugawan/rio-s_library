<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteBook extends Model
{
    function book() {
        return $this->hasMany('App\Book');
    }
}
