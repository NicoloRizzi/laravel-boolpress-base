<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //MASS ASSIGN
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug',
    ];

    /**
     * DB RELATIONSHIPS WITH USER
     */
    public function user () {
        return $this->belongsTo('App\User');
    }

    /**
     * DB REALATION WITH TAG TABLE
     * MANY TO MANY
     */
    public function tags () {
        return $this->belongsToMany('App\Tag');
    }
}
