<?php

namespace App\models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomUser extends Authenticatable
{
    use Notifiable;

    /**
     * DB table name
     *
     * @var string
     */
    protected $table = 'custom_user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password','firstName','surname', 'phone', 'fbUrl', 'age'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}