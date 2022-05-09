<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{

    protected $table = 'ideas';

    public $timestamps = false;

    protected $fillable = [
        'nom',
        'email',
        'sujet',
        'message'
    ];

    use HasFactory;

    public function comments() {
        return $this-> hasMany(related:Comment::class);
    }
}
