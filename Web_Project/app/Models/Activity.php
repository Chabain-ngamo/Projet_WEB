<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';

    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'description',
        'image',
        'dates',
        'status',
        'price',
        'is_repeating'
    ];
    
    use HasFactory;
}
