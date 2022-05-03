<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use App\Models\CocktailBase;
use App\Models\CocktailSplit;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class OriginalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ログインしているユーザーのオリジナルカクテルをすべて取得
        $cocktails = Cocktail::where('user_id', Auth::user()['id'])->orderBy('updated_at', 'desc')->paginate(9);

        return view('users.originals.original', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.originals.create');
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

        //オリジナルカクテル登録フォームの入力内容を取得
        $data = $request->all();

        //オリジナルカクテルを登録してそのカクテルIDを取得
        $cocktail_id = Cocktail::usersStoreCocktailAndGetCocktailId($data);
        //中間テーブルへ登録したカクテルのbaseとsplitを登録
        CocktailBase::storeCocktailBase($data, $cocktail_id);
        CocktailSplit::storeCocktailSplit($data, $cocktail_id);
        
        return redirect('original')->with('store', 'カクテルを登録しました');
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
        $cocktail = Cocktail::find($id)->where('user_id', Auth::id())->where('id', $id)->first();
        $edit_bases = Cocktail::find($id)->bases()->get();
        $edit_splits = Cocktail::find($id)->splits()->get();
       
        return view('users.originals.edit', compact('cocktail', 'edit_bases', 'edit_splits'));
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

        //オリジナルカクテル編集フォームの入力内容を取得
        $data = $request->all();

        //カクテルテーブルのname、glass_id、strength_id、taste_id、technique_id、how_toをフォームの取得内容にupdate
        Cocktail::where('id', $id)->update([
            'name' => $data['name'],
            'glass_id' => $data['glass'],
            'strength_id' => $data['strength'],
            'taste_id' => $data['taste'],
            'technique_id' => $data['technique'],
            'how_to' => $data['how_to']
        ]);

        //更新するカクテルのベースと材料を削除
        CocktailBase::where('cocktail_id', $id)->delete();
        CocktailSplit::where('cocktail_id', $id)->delete();

        //更新するカクテルのベースと材料を再登録
        CocktailBase::storeCocktailBase($data, $id);
        CocktailSplit::storeCocktailSplit($data, $id);
        
        return redirect('original')->with('update', 'カクテルを更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cocktail::where('id', $id)->where('authority', 2)->where('user_id', Auth::id())->delete();

        return redirect()->back()->with('delete', 'カクテルを削除しました');
    }
}