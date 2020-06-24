<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * DB RELATIONSHIPS WITH TAG POST TABLE
     * MANY TO MANY
     */
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
