<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Split extends Model
{
    use Sortable;

    public function users(){
        return $this->belongsToMany('App\Models\User', 'split_user', 'split_id', 'user_id')->withTimestamps();
    }
}
