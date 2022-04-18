<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    public function users(){
        return $this->belongsToMany('App\Models\User', 'base_user', 'base_id', 'user_id')->withTimestamps();
    }

    public function cocktails(){
        return $this->belongsToMany('App\Models\Cocktail', 'cocktail_base', 'base_id', 'cocktail_id');
    }
}
