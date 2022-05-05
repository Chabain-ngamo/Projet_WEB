<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{//Subscribe to one or many activity
    protected $fillable = [
        'user_id', 'event_id'
    ];

    public $timestamps = false;

  /*  public function user() {
        return $this->belongsTo('App\User');
    }

    public function activity() {
        return $this->belongsTo('App\Activity');
    }*/
}