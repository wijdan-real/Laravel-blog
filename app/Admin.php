<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//


class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard='admin';

    /**
     * The attributes that are mass assignable.
     *  The attributes that should be hidden for arrays.
     * @var array    @var array
     */
    protected $fillable = [
        'name', 'email', 'password', "job_title"
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


}
