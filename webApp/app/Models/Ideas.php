<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{

    protected $table = 'ideabox';

    public $timestamps = false;

    protected $fillable = [
        'sujet',
        'description',
        'image'
    ];

    use HasFactory;

    public function comments() {
        return $this-> hasMany(related:Comment::class);
    }
}
