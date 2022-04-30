<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use App\Models\CocktailBase;
use App\Models\CocktailSplit;
use App\Models\CocktailGlass;
use App\Models\CocktailTaste;
use App\Models\CocktailStrength;
use App\Models\CocktailTechnique;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Library\Common;

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
        $cocktails = Cocktail::where('user_id', Auth::user()['id'])->where('status', 1)->paginate(9);

        return view('users\originals\original', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users\originals\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Common::storeCocktail($request);
        
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
        $cocktail = Cocktail::find($id)->where('status', 1)->where('user_id', Auth::id())->where('id', $id)->first();
        $edit_bases = Cocktail::find($id)->bases()->get();
        $edit_splits = Cocktail::find($id)->splits()->get();
        $edit_taste = Cocktail::find($id)->tastes()->first();      
        $edit_strength = Cocktail::find($id)->strengths()->first();
        $edit_technique = Cocktail::find($id)->techniques()->first();
        $edit_glass = Cocktail::find($id)->glasses()->first();

        return view('users\originals\edit', compact('cocktail', 'edit_bases', 'edit_splits', 'edit_taste', 'edit_strength', 'edit_technique', 'edit_glass'));
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
        Common::editCocktail($request, $id);
        
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
        Cocktail::where('id', $id)->where('status', 1)->where('authority', 2)->where('user_id', Auth::id())->delete();

        return redirect()->back()->with('delete', 'カクテルを削除しました');
    }
}