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
        Common::SearchCocktails($request, $query);
  
        //カクテルの情報を取得
        $cocktails = $query
        ->where('authority', 1)
        ->where('status', 1)
        ->orderBy('cocktails.name', 'asc')
        ->paginate(9);      

        return view('users\home', compact('text', 'cocktails'));
    }


    //詳細画面表示
    public function show($id)
    {
    $query = Cocktail::find($id);

    //カクテルの詳細情報を取得
    $cocktail = Common::showCocktails($query);
    
    return view('users/show', $cocktail);
    }
}