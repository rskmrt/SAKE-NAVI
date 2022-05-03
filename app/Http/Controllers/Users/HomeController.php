<?php

namespace App\Http\Controllers\Users;

use App\Models\Cocktail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Common;

class HomeController extends Controller
{
    //一覧画面表示
    public function index(Request $request)
    {
        $query = Cocktail::query()->select('cocktails.*');

        //検索フォームのテキストを取得
        $text = $request->input('text');

        //検索情報をqueryにチェーン
        Cocktail::SearchCocktails($request, $query);
  
        //カクテルの情報を取得
        $cocktails = $query
        ->where('authority', 1)
        ->orderBy('cocktails.name', 'asc')
        ->paginate(9);     

        return view('users.home', compact('text', 'cocktails'));
    }


    //詳細画面表示
    public function show($id)
    {
    $query = Cocktail::find($id);
    
    $cocktail = $query
    ->select('cocktails.name as cocktail_name', 'cocktails.how_to', 'glasses.name as glass_name', 'tastes.name as taste_name', 'techniques.name as technique_name', 'strengths.name as strength_name')
    ->where('cocktails.id', $id)
    ->leftjoin('glasses', 'cocktails.glass_id', '=', 'glasses.id')
    ->leftjoin('tastes', 'cocktails.taste_id', '=', 'tastes.id')
    ->leftjoin('techniques', 'cocktails.technique_id', '=', 'techniques.id')
    ->leftjoin('strengths', 'cocktails.strength_id', '=', 'strengths.id')
    ->first();

    $base = $query
    ->bases()
    ->get();

    $split = $query
    ->splits()
    ->get();
    
    return view('users.show', compact('cocktail','base', 'split'));
    }
}