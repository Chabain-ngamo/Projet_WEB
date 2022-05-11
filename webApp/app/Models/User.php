<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable; 


    protected $fillable = [
        'firstname',
        'secondname',
        'centre',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function comments() {
        return $this-> hasMany(related:Comment::class);
    }
}
