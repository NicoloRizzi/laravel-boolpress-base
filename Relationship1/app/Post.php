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
    ];

    /**
     * DB RELATIONSHIPS WITH USER
     */
    public function user () {
        return $this->belongsTo('App\User');
    }
}
