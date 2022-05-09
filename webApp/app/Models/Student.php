<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    public $timestamps = false;

    protected $fillable = [
        'firstName',
        'secondName',
        'centre',
        'email',
        'password',
        'bde'
    ];

    use HasFactory;

    public function comments() {
        return $this-> hasMany(related:Comment::class);
    }
}
