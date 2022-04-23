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
        
        $query = Cocktail::query()->select('cocktails.*');

        //カクテル名検索
        $text = $request->input('text');
 
        if (!empty($text)) {
            $spaceConversion = mb_convert_kana($text, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('cocktails.name', 'like', '%'.$value.'%');
            }
            foreach($wordArraySearched as $value) {
                $query->orwhere('splits.name', 'like', '%'.$value.'%');
            }
            $query->join('cocktail_split', 'cocktails.id', '=', 'cocktail_split.cocktail_id')
                  ->join('splits', 'cocktail_split.split_id', '=', 'splits.id');
            $cocktails = $query->distinct()->get();
        }

        //ベース検索
        $base_search = $request->input('base');
        if (!empty($base_search)) {
            $query->wherein('cocktail_base.base_id', $base_search);
            $query->join('cocktail_base', 'cocktails.id', '=', 'cocktail_base.cocktail_id');
        }


        
        //テイスト検索
        $taste_search = $request->input('taste');

        if (!empty($taste_search)) {
            $query->wherein('cocktail_taste.taste_id', $taste_search);
            $query->join('cocktail_taste', 'cocktails.id', '=', 'cocktail_taste.cocktail_id');
        }


        //アルコール度数検索
        $strength_search = $request->input('strength');

        if (!empty($strength_search)) {
            $query->wherein('cocktail_strength.strength_id', $strength_search);
            $query->join('cocktail_strength', 'cocktails.id', '=', 'cocktail_strength.cocktail_id');
        }


        //製法検索
        $technique_search = $request->input('technique');

        if (!empty($technique_search)) {
            $query->wherein('cocktail_technique.technique_id', $technique_search);
            $query->join('cocktail_technique', 'cocktails.id', '=', 'cocktail_technique.cocktail_id');
        }


        //グラスタイプ検索
        $glass_search = $request->input('glass');

        if (!empty($glass_search)) {
            $query->wherein('cocktail_glass.glass_id', $glass_search);
            $query->join('cocktail_glass', 'cocktails.id', '=', 'cocktail_glass.cocktail_id');
        }
    
        //検索結果を取得
        $cocktails = $query
        ->where('authority', 1)
        ->where('status', 1)
                        ->orderBy('cocktails.name', 'asc')
                        ->paginate(9);
                        

        return view('index\home', compact('text', 'cocktails', 'bases', 'glasses', 'splits', 'strengths', 'tastes', 'techniques'));
    }


    //詳細画面表示
    public function show($id)
    {
    $query = Cocktail::find($id);

        $base = $query
        ->bases()
        ->get();

        $glass = $query
        ->glasses()
        ->get();

        $split = $query
        ->splits()
        ->get();
        
        $strength = $query
        ->strengths()
        ->get();

        $taste = $query
        ->tastes()
        ->get();

        $technique = $query
        ->techniques()
        ->get();

        return view('index\show', compact('base','glass', 'split', 'strength', 'taste', 'technique'));
    }
}