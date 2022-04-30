<?php
 
namespace app\Library;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cocktail;
use App\Models\CocktailBase;
use App\Models\CocktailGlass;
use App\Models\CocktailSplit;
use App\Models\CocktailStrength;
use App\Models\CocktailTaste;
use App\Models\CocktailTechnique;
 
class Common {
    //検索結果の取得
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
    
    //カクテル詳細表示
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

    //ユーザーが行うカクテル登録
    public static function usersStoreCocktail($request){
        $data = $request->all();
        $cocktail_id = Cocktail::usersStoreCocktailAndGetCocktailId($data);
        CocktailBase::storeCocktailBase($data, $cocktail_id);
        CocktailGlass::storeCocktailGlass($data, $cocktail_id);
        CocktailSplit::storeCocktailSplit($data, $cocktail_id);
        CocktailStrength::storeCocktailStrength($data, $cocktail_id);
        CocktailTaste::storeCocktailTaste($data, $cocktail_id);
        CocktailTechnique::storeCocktailTechnique($data, $cocktail_id);
    }

    //管理者が行うカクテル登録
    public static function adminsStoreCocktail($request){
        $data = $request->all();
        $cocktail_id = Cocktail::adminsStoreCocktailAndGetCocktailId($data);
        CocktailBase::storeCocktailBase($data, $cocktail_id);
        CocktailGlass::storeCocktailGlass($data, $cocktail_id);
        CocktailSplit::storeCocktailSplit($data, $cocktail_id);
        CocktailStrength::storeCocktailStrength($data, $cocktail_id);
        CocktailTaste::storeCocktailTaste($data, $cocktail_id);
        CocktailTechnique::storeCocktailTechnique($data, $cocktail_id);
    }

    //カクテル編集
    public static function editCocktail($request, $id){
        $data = $request->all();

        Cocktail::where('id', $id)->where('status', 1)->where('authority', 2)->update([
            'name' => $data['name'],
            'how_to' => $data['how_to']
        ]);

        CocktailBase::where('cocktail_id', $id)->delete();
        CocktailBase::storeCocktailBase($data, $id);
        CocktailGlass::where('cocktail_id', $id)->delete();
        CocktailGlass::storeCocktailGlass($data, $id);
        CocktailSplit::where('cocktail_id', $id)->delete();
        CocktailSplit::storeCocktailSplit($data, $id);
        CocktailStrength::where('cocktail_id', $id)->delete();
        CocktailStrength::storeCocktailStrength($data, $id);
        CocktailTaste::where('cocktail_id', $id)->delete();
        CocktailTaste::storeCocktailTaste($data, $id);
        CocktailTechnique::where('cocktail_id', $id)->delete();
        CocktailTechnique::storeCocktailTechnique($data, $id);
    }
   
}