<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Split extends Model
{
    public function users(){
        return $this->belongsToMany('App\Models\User', 'split_user', 'split_id', 'user_id')->withTimestamps();
    }
}
