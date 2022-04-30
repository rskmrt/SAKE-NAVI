<?php
 
namespace app\Library;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cocktail;
 
class Common {
    public static function SearchCocktails($request, $query){
        //カクテル名、材料名検索
        $text = $request->input('text');
        if (!empty($text)) {
            Cocktail::searchCocktailAndSplit($text, $query);
        }

        //ベース検索
        $base = $request->input('base');
        if (!empty($base)) {
            Cocktail::searchBase($base, $query);
        }

        //テイスト検索
        $taste = $request->input('taste');
        if (!empty($taste)) {
            Cocktail::searchTaste($taste, $query);
        }

        //アルコール度数検索
        $strength = $request->input('strength');
        if (!empty($strength)) {
            Cocktail::searchStrength($strength, $query);
        }

        //製法検索
        $technique = $request->input('technique');
        if (!empty($technique)) {
            Cocktail::searchTechnique($technique, $query);
        }

        //グラスタイプ検索
        $glass = $request->input('glass');
        if (!empty($glass)) {
            Cocktail::searchGlass($glass, $query);
        }
    
        return $query;
    }
    
    public static function showCocktails($query){
        $cocktail = $query;

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

        return compact('cocktail','base','glass', 'split', 'strength', 'taste', 'technique');
    }
   
}