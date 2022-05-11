<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Look extends Model
{
    protected $table = 'look';

    protected $fillable = [
        'id_cesi',
        'id_activity'
    ];
    
    use HasFactory;
}
