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

        return view('users\home', compact('text', 'cocktails'));
    }


    //詳細画面表示
    public function show($id)
    {
    $query = Cocktail::find($id);

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