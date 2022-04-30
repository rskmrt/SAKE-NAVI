<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocktailGlass extends Model
{
    protected $table = 'cocktail_glass';

    public static function storeCocktailGlass($data, $cocktail_id){
        if(!empty($data['glass'])){
            CocktailGlass::insert([
                'cocktail_id' => $cocktail_id,
                'glass_id' => $data['glass']
            ]);
        }
    }

}
