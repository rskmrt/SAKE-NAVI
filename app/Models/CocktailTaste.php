<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CocktailTaste extends Model
{
    protected $table = 'cocktail_taste';

    public static function storeCocktailTaste($data, $cocktail_id){
        if(!empty($data['taste'])){
            CocktailTaste::insert([
                'cocktail_id' => $cocktail_id,
                'taste_id' => $data['taste']
            ]);
        }
    }

}
