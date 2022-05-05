<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cesi extends Model
{
    protected $table = 'cesi';

    public $timestamps = false;

    protected $fillable = [
        'firstName',
        'secondName',
        'centre',
        'email',
        'password'
    ];

    use HasFactory;
}
