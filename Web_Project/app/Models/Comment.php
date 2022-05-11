<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cesi() {
        return $this-> belongsTo(related:Cesi::class);
    }
    public function ideabox() {
        return $this-> belongsTo(related:Ideabox::class);
    }

}
