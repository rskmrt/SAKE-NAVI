<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocktailSplit extends Model
{
    protected $table = 'cocktail_split';

    public static function storeCocktailSplit($data, $cocktail_id){
        if(!empty($data['split'])){
            foreach($data['split'] as $value){
                CocktailSplit::insert([
                    'cocktail_id' => $cocktail_id,
                    'split_id' => $value
                ]);
            }
        }   
    }


}
