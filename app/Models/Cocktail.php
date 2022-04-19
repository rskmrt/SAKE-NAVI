<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{

    

    //詳細表示
    public function bases(){
        return $this->belongsToMany('App\Models\Base', 'cocktail_base', 'cocktail_id', 'base_id')->distinct();
    }

    public function glasses(){
        return $this->belongsToMany('App\Models\Glass', 'cocktail_glass', 'cocktail_id', 'glass_id')->distinct();
    }

    public function splits(){
        return $this->belongsToMany('App\Models\Split', 'cocktail_split', 'cocktail_id', 'split_id')->distinct();
    }

    public function strengths(){
        return $this->belongsToMany('App\Models\Strength', 'cocktail_strength', 'cocktail_id', 'strength_id')->distinct();
    }

    public function tastes(){
        return $this->belongsToMany('App\Models\Taste', 'cocktail_taste', 'cocktail_id', 'taste_id')->distinct();
    }

    public function techniques(){
        return $this->belongsToMany('App\Models\Taste', 'cocktail_technique', 'cocktail_id', 'technique_id')->distinct();
    }

    public function users(){
        return $this->belongsToMany('App\Models\User', 'favorites', 'cocktail_id', 'user_id')->withTimestamps();
    }
}
