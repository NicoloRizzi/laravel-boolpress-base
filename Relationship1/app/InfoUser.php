<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    /**
     * MASS ASSIGN FILLABLE
     */
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'avatar',
    ];
    public $timestamps = false;

    /**
     * DB RELATIONSHIPS
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
