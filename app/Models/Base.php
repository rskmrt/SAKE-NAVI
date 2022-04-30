<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Base extends Model
{
    use Sortable;

    public function users(){
        return $this->belongsToMany('App\Models\User', 'base_user', 'base_id', 'user_id')->withTimestamps();
    }

    public function cocktails(){
        return $this->belongsToMany('App\Models\Cocktail', 'cocktail_base', 'base_id', 'cocktail_id');
    }
}
