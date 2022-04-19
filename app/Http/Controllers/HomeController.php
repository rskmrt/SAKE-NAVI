<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use App\Models\Base;
use App\Models\Taste;
use App\Models\Split;
use App\Models\Strength;
use App\Models\Technique;
use App\Models\Glass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //一覧画面表示
    public function index(Request $request)
    {
        $bases = Base::get();
        $glasses = Glass::get();
        $splits = Split::get();
        $strengths = Strength::get();
        $tastes = Taste::get();
        $techniques = Technique::get();
        
        $query = Cocktail::query();

        //カクテル名検索
        $text_search = $request->input('text');
 
        if (!empty($text_search)) {
            $spaceConversion = mb_convert_kana($text_search, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $cocktails = $query->paginate(9);
        }


        //ベース検索
        $base_search = $request->input('base');

        if (!empty($base_search)) {
            foreach($base_search as $value){
                if($value === reset($base_search)){
                    $query->whereRaw('(base_id = ?', [$value]);
                }
                $query->orwhereRaw('base_id = ?', [$value]);
                if($value === end($base_search)){
                    $query->orwhereRaw('base_id = ?)', [$value]);
                }
            }
            $query->join('cocktail_base', 'cocktails.id', '=', 'cocktail_base.cocktail_id');
        }


         //材料検索
         $split_search = $request->input('split');

         if (!empty($split_search)) {
             foreach($split_search as $value){
                 if($value === reset($split_search)){
                     $query->whereRaw('(split_id = ?', [$value]);
                 }
                 $query->orwhereRaw('split_id = ?', [$value]);
                 if($value === end($split_search)){
                     $query->orwhereRaw('split_id = ?)', [$value]);
                 }
             }
             $query->join('cocktail_split', 'cocktails.id', '=', 'cocktail_split.cocktail_id');
         }

        
        //テイスト検索
        $taste_search = $request->input('taste');

        if (!empty($taste_search)) {
            foreach($taste_search as $value){
                if($value === reset($taste_search)){
                    $query->whereRaw('(taste_id = ?', [$value]);
                }
                $query->orwhereRaw('taste_id = ?', [$value]);
                if($value === end($taste_search)){
                    $query->orwhereRaw('taste_id = ?)', [$value]);
                }
            }
            $query->join('cocktail_taste', 'cocktails.id', '=', 'cocktail_taste.cocktail_id');
        }


        //アルコール度数検索
        $strength_search = $request->input('strength');

        if (!empty($strength_search)) {
            foreach($strength_search as $value){
                if($value === reset($strength_search)){
                    $query->whereRaw('(strength_id = ?', [$value]);
                }
                $query->orwhereRaw('strength_id = ?', [$value]);
                if($value === end($strength_search)){
                    $query->orwhereRaw('strength_id = ?)', [$value]);
                }
            }
            $query->join('cocktail_strength', 'cocktails.id', '=', 'cocktail_strength.cocktail_id');
        }


        //製法検索
        $technique_search = $request->input('technique');

        if (!empty($technique_search)) {
            foreach($technique_search as $value){
                if($value === reset($technique_search)){
                    $query->whereRaw('(technique_id = ?', [$value]);
                }
                $query->orwhereRaw('technique_id = ?', [$value]);
                if($value === end($technique_search)){
                    $query->orwhereRaw('technique_id = ?)', [$value]);
                }
            }
            $query->join('cocktail_technique', 'cocktails.id', '=', 'cocktail_technique.cocktail_id');
        }


        //グラスタイプ検索
        $glass_search = $request->input('glass');

        if (!empty($glass_search)) {
            foreach($glass_search as $value){
                if($value === reset($glass_search)){
                    $query->whereRaw('(glass_id = ?', [$value]);
                }
                $query->orwhereRaw('glass_id = ?', [$value]);
                if($value === end($glass_search)){
                    $query->orwhereRaw('glass_id = ?)', [$value]);
                }
            }
            $query->join('cocktail_glass', 'cocktails.id', '=', 'cocktail_glass.cocktail_id');
        }
    
        //検索結果を取得
        $cocktails = $query
                        ->orderBy('cocktails.name', 'asc')
                        ->paginate(9);

        return view('home', compact('text_search', 'cocktails', 'bases', 'glasses', 'splits', 'strengths', 'tastes', 'techniques'));
    }


    //詳細画面表示
    public function show($id)
    {
        $base = Cocktail::find($id)
        ->bases()
        ->get();

        $glass = Cocktail::find($id)
        ->glasses()
        ->get();

        $split = Cocktail::find($id)
        ->splits()
        ->get();
        
        $strength = Cocktail::find($id)
        ->strengths()
        ->get();

        $taste = Cocktail::find($id)
        ->tastes()
        ->get();

        $technique = Cocktail::find($id)
        ->techniques()
        ->get();

        return view('show', compact('base','glass', 'split', 'strength', 'taste', 'technique'));
    }
}