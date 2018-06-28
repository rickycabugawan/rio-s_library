<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    function book() {
        return $this->hasMany('App\Book');
    }
}
