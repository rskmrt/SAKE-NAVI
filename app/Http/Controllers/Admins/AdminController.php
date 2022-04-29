<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\CocktailBase;
use App\Models\CocktailSplit;
use App\Models\CocktailGlass;
use App\Models\CocktailTaste;
use App\Models\CocktailStrength;
use App\Models\CocktailTechnique;


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
            $cocktails = $query
            ->where('status', 1)
            ->where('authority', 1)
            ->distinct()
            ->get();
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
        ->orderBy('updated_at', 'desc')
        ->paginate(9);      

        return view('admins/index/cocktails/home', compact('text', 'cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.index.cocktails.cocktail');

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
            'name' => 'required|max:255|unique:cocktails',
        ]);

        $data = $request->all();

        $cocktail_id = Cocktail::insertGetId([
            'name' => $data['name'],
            'how_to' => $data['how_to'],
            'authority' => 1,
            'status' => 1
        ]);
        
        if(!empty($data['base'])){
            foreach($data['base'] as $value){
                CocktailBase::insert([
                    'cocktail_id' => $cocktail_id,
                    'base_id' => $value
                ]);
            }
        }
        
        
        if(!empty($data['split'])){
            foreach($data['split'] as $value){
                CocktailSplit::insert([
                    'cocktail_id' => $cocktail_id,
                    'split_id' => $value
                ]);
            }
        }   

        if(!empty($data['glass'])){
            CocktailGlass::insert([
                'cocktail_id' => $cocktail_id,
                'glass_id' => $data['glass']
            ]);
        }

        if(!empty($data['taste'])){
            CocktailTaste::insert([
                'cocktail_id' => $cocktail_id,
                'taste_id' => $data['taste']
            ]);
        }

        if(!empty($data['strength'])){
            CocktailStrength::insert([
                'cocktail_id' => $cocktail_id,
                'strength_id' => $data['strength']
            ]);
        }

        if(!empty($data['technique'])){
            CocktailTechnique::insert([
                'cocktail_id' => $cocktail_id,
                'technique_id' => $data['technique']
            ]);
        }

        return redirect('admin/');
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
        $cocktail = Cocktail::where('id', $id)->where('status', 1)->first();
        $edit_bases = Cocktail::find($id)->bases()->get();
        $edit_splits = Cocktail::find($id)->splits()->get();
        $edit_taste = Cocktail::find($id)->tastes()->first();      
        $edit_strength = Cocktail::find($id)->strengths()->first();
        $edit_technique = Cocktail::find($id)->techniques()->first();
        $edit_glass = Cocktail::find($id)->glasses()->first();

        return view('admins\index\cocktails\edit', compact('cocktail', 'edit_bases', 'edit_splits', 'edit_taste', 'edit_strength', 'edit_technique', 'edit_glass'));
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
            'name' => 'required|max:255',
        ]);
        $data = $request->all();

        $cocktail_id = Cocktail::insertGetId([
            'name' => $data['name'],
            'how_to' => $data['how_to'],
            'authority' => 1,
            'status' => 1
        ]);
        
        if(!empty($data['base'])){
            foreach($data['base'] as $value){
                CocktailBase::insert([
                    'cocktail_id' => $cocktail_id,
                    'base_id' => $value
                ]);
            }
        }
        
        
        if(!empty($data['split'])){
            foreach($data['split'] as $value){
                CocktailSplit::insert([
                    'cocktail_id' => $cocktail_id,
                    'split_id' => $value
                ]);
            }
        }   

        if(!empty($data['glass'])){
            CocktailGlass::insert([
                'cocktail_id' => $cocktail_id,
                'glass_id' => $data['glass']
            ]);
        }

        if(!empty($data['taste'])){
            CocktailTaste::insert([
                'cocktail_id' => $cocktail_id,
                'taste_id' => $data['taste']
            ]);
        }

        if(!empty($data['strength'])){
            CocktailStrength::insert([
                'cocktail_id' => $cocktail_id,
                'strength_id' => $data['strength']
            ]);
        }

        if(!empty($data['technique'])){
            CocktailTechnique::insert([
                'cocktail_id' => $cocktail_id,
                'technique_id' => $data['technique']
            ]);
        }
        Cocktail::where('id', $id)->where('status', 1)->delete();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cocktail::where('id', $id)->where('status', 1)->where('authority', 1)->update(['status' => 2]);

        return redirect()->back();
    }
}