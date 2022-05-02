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
use App\Library\Common;

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

        return view('admins/cocktails/home', compact('text', 'cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/cocktails/cocktail');

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
        ]);

        

        $data = $request->all();
        $cocktail_id = Cocktail::adminsStoreCocktailAndGetCocktailId($data);
        CocktailBase::storeCocktailBase($data, $cocktail_id);
        CocktailGlass::storeCocktailGlass($data, $cocktail_id);
        CocktailSplit::storeCocktailSplit($data, $cocktail_id);
        CocktailStrength::storeCocktailStrength($data, $cocktail_id);
        CocktailTaste::storeCocktailTaste($data, $cocktail_id);
        CocktailTechnique::storeCocktailTechnique($data, $cocktail_id);

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
        $cocktail = Cocktail::where('id', $id)->first();
        $edit_bases = Cocktail::find($id)->bases()->get();
        $edit_splits = Cocktail::find($id)->splits()->get();
        $edit_taste = Cocktail::find($id)->tastes()->first();      
        $edit_strength = Cocktail::find($id)->strengths()->first();
        $edit_technique = Cocktail::find($id)->techniques()->first();
        $edit_glass = Cocktail::find($id)->glasses()->first();

        return view('admins/cocktails/edit', compact('cocktail', 'edit_bases', 'edit_splits', 'edit_taste', 'edit_strength', 'edit_technique', 'edit_glass'));
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
        ]);

        $data = $request->all();
        Cocktail::where('id', $id)->update([
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

        return redirect('/admin')->with('update', 'カクテルを更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cocktail::where('id', $id)->where('authority', 1)->delete();

        return redirect()->back()->with('delete', 'カクテルを削除しました');
    }
}