<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Static_;

class Cocktail extends Model
{
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
        return $this->belongsToMany('App\Models\Technique', 'cocktail_technique', 'cocktail_id', 'technique_id')->distinct();
    }

    public function users(){
        return $this->belongsToMany('App\Models\User', 'favorites', 'cocktail_id', 'user_id')->withTimestamps();
    }

    //検索機能
    public static function SearchCocktails($request, $query){
        //カクテル名、材料名検索
        $text = $request->input('text');
        if (!empty($text)) {
            $spaceConversion = mb_convert_kana($text, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('cocktails.name', 'like', '%'.$value.'%');
            }
            foreach($wordArraySearched as $value) {
                $query->orwhere('bases.name', 'like', '%'.$value.'%');
            }
            foreach($wordArraySearched as $value) {
                $query->orwhere('splits.name', 'like', '%'.$value.'%');
            }
            $query
            ->join('cocktail_base', 'cocktails.id', '=', 'cocktail_base.cocktail_id')
            ->join('bases', 'cocktail_base.base_id', '=', 'bases.id')
            ->join('cocktail_split', 'cocktails.id', '=', 'cocktail_split.cocktail_id')
            ->join('splits', 'cocktail_split.split_id', '=', 'splits.id');

            return $query->distinct()->paginate(9);
        }

        //ベース検索
        $base = $request->input('base');
        if (!empty($base)) {
            return $query
        ->wherein('cocktail_base.base_id', $base)
        ->join('cocktail_base', 'cocktails.id', '=', 'cocktail_base.cocktail_id');
        }

        //材料検索
        $split = $request->input('split');
        if (!empty($split)) {
            return $query
        ->wherein('cocktail_split.split_id', $split)
        ->join('cocktail_split', 'cocktails.id', '=', 'cocktail_split.cocktail_id');
        }

        //テイスト検索
        $taste = $request->input('taste');
        if (!empty($taste)) {
            return $query
        ->wherein('cocktail_taste.taste_id', $taste)
        ->join('cocktail_taste', 'cocktails.id', '=', 'cocktail_taste.cocktail_id');
        }

        //アルコール度数検索
        $strength = $request->input('strength');
        if (!empty($strength)) {
            return $query
        ->wherein('cocktail_strength.strength_id', $strength)
        ->join('cocktail_strength', 'cocktails.id', '=', 'cocktail_strength.cocktail_id');
        }

        //製法検索
        $technique = $request->input('technique');
        if (!empty($technique)) {
            return $query
        ->wherein('cocktail_technique.technique_id', $technique)
        ->join('cocktail_technique', 'cocktails.id', '=', 'cocktail_technique.cocktail_id');
        }

        //グラスタイプ検索
        $glass = $request->input('glass');
        if (!empty($glass)) {
            return $query
        ->wherein('cocktail_glass.glass_id', $glass)
        ->join('cocktail_glass', 'cocktails.id', '=', 'cocktail_glass.cocktail_id');
        }
    
        return $query;
    }

    //ユーザーが行うカクテル名登録とそのカクテルIDの取得
    public static function usersStoreCocktailAndGetCocktailId($data){    
        $cocktail_id = Cocktail::insertGetId([
            
            'name' => $data['name'],
            'how_to' => $data['how_to'],
            'authority' => 2,
            'user_id' => $data['user_id'],
        ]);

        return $cocktail_id;
    }

    //管理者が行うカクテル名登録とそのカクテルIDの取得
    public static function adminsStoreCocktailAndGetCocktailId($data){    
        $cocktail_id = Cocktail::insertGetId([
            'name' => $data['name'],
            'how_to' => $data['how_to'],
            'authority' => 1,
        ]);

        return $cocktail_id;
    }

    
}
