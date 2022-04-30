<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocktailBase extends Model
{
    protected $table = 'cocktail_base';

    public static function storeCocktailBase($data, $cocktail_id){
        if(!empty($data['base'])){
            foreach($data['base'] as $value){
                CocktailBase::insert([
                    'cocktail_id' => $cocktail_id,
                    'base_id' => $value
                ]);
            }
        }
    }
}
