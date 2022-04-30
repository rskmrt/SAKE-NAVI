<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocktailTechnique extends Model
{
    protected $table = 'cocktail_technique';

    public static function storeCocktailTechnique($data, $cocktail_id){
        if(!empty($data['technique'])){
            CocktailTechnique::insert([
                'cocktail_id' => $cocktail_id,
                'technique_id' => $data['technique']
            ]);
        }
    }

}
