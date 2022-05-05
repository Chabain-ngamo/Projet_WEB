<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'name', 'date', 'place', 'like', 'is_proposal', 'is_accept', 'can_subscribe', 'photo', 'description'
    ];

    protected $dates = [
        'date', 'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_proposal' => 'boolean',
        'is_accept' => 'boolean',
        'can_subscribe' => 'boolean',
        'like' => 'integer'
    ];
}