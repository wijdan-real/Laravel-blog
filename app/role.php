<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //


    public function admins(){

        return $this->belongsToMany(admin::class)->withTimestamps();
    }
}
