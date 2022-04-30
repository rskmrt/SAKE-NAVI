<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocktailStrength extends Model
{
    protected $table = 'cocktail_strength';

    public static function storeCocktailStrength($data, $cocktail_id){
        if(!empty($data['strength'])){
            CocktailStrength::insert([
                'cocktail_id' => $cocktail_id,
                'strength_id' => $data['strength']
            ]);
        }
    }

}
