<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\CocktailBase;
use App\Models\CocktailSplit;
use App\Models\CocktailStrength;
use App\Models\CocktailTaste;
use App\Models\CocktailTechnique;
use App\Models\CocktailGlass;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        ->orderBy('updated_at', 'desc')
        ->paginate(9);      

        return view('admins.cocktails.home', compact('text', 'cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.cocktails.cocktail');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|',
            'base' => 'required',
            'taste' => 'required',
            'technique' => 'required',
            'strength' => 'required',
            'glass' => 'required',
        ]);

        $data = $request->all();

        //オリジナルカクテルを登録してそのカクテルIDを取得
        $cocktail_id = Cocktail::adminsStoreCocktailAndGetCocktailId($data);

        //中間テーブルへ登録したカクテルのbaseとsplitを登録
        CocktailBase::storeCocktailBase($data, $cocktail_id);
        CocktailSplit::storeCocktailSplit($data, $cocktail_id);

        return redirect('admin/')->with('store', 'カクテルを登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cocktail = Cocktail::find($id)->where('id', $id)->first();
        $edit_bases = Cocktail::find($id)->bases()->get();
        $edit_splits = Cocktail::find($id)->splits()->get();

        return view('admins.cocktails.edit', compact('cocktail', 'edit_bases', 'edit_splits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|',
            'base' => 'required',
            'taste' => 'required',
            'technique' => 'required',
            'strength' => 'required',
            'glass' => 'required',
        ]);

       //カクテル編集フォームの入力内容を取得
       $data = $request->all();

       //ベースと材料以外の入力内容に編集
       Cocktail::updateCocktail($data, $id); 

       //更新するカクテルのベースと材料を削除
       CocktailBase::where('cocktail_id', $id)->delete();
       CocktailSplit::where('cocktail_id', $id)->delete();

       //更新するカクテルのベースと材料を再登録
       CocktailBase::storeCocktailBase($data, $id);
       CocktailSplit::storeCocktailSplit($data, $id);

        return redirect('admin')->with('update', 'カクテルを更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //対象のIDのカクテルを削除
        Cocktail::where('id', $id)->where('authority', 1)->delete();

        return redirect()->back()->with('delete', 'カクテルを削除しました');
    }
}