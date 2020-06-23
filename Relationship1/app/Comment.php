<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // MASS ASSIGN
    protected $fillable = [
        'post_id',
        'title',
        'body',
    ];

    //RELATIONSHIPS
    public function commentPost() {
        return $this->belongsTo('App\Post');
    }
}
