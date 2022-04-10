<?php

namespace App\Http\Controllers;

use App\cocktail;
use App\base;
use App\taste;
use App\split;
use App\strength;
use App\technique;
use App\glass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        //カクテル一覧表示
        $cocktails = cocktail::paginate(9);
        

        //フォーム検索
        $bases = base::get();
        $glasses = glass::get();
        $splits = split::get();
        $strengths = strength::get();
        $tastes = taste::get();
        $techniques = technique::get();
        $query = cocktail::query();


        //カクテル名検索
        $text_search = $request->input('text');
 
        if (!empty($text_search)) {
            $spaceConversion = mb_convert_kana($text_search, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $cocktails = $query->paginate(9);
        }


        //ベース検索
        $base_search = $request->input('base');

        if (!empty($base_search)) {
            foreach($base_search as $value){
                if($value === reset($base_search)){
                    $query->whereRaw('(base_id = ?', [$value]);
                }
                $query->orwhereRaw('base_id = ?', [$value]);
                if($value === end($base_search)){
                    $query->orwhereRaw('base_id = ?)', [$value]);
                }
            }
            $query->join('cocktails_bases', 'cocktails.id', '=', 'cocktails_bases.cocktail_id');
        }


         //材料検索
         $split_search = $request->input('split');

         if (!empty($split_search)) {
             foreach($split_search as $value){
                 if($value === reset($split_search)){
                     $query->whereRaw('(split_id = ?', [$value]);
                 }
                 $query->orwhereRaw('split_id = ?', [$value]);
                 if($value === end($split_search)){
                     $query->orwhereRaw('split_id = ?)', [$value]);
                 }
             }
             $query->join('cocktails_splits', 'cocktails.id', '=', 'cocktails_splits.cocktail_id');
         }

        
        //テイスト検索
        $taste_search = $request->input('taste');

        if (!empty($taste_search)) {
            foreach($taste_search as $value){
                if($value === reset($taste_search)){
                    $query->whereRaw('(taste_id = ?', [$value]);
                }
                $query->orwhereRaw('taste_id = ?', [$value]);
                if($value === end($taste_search)){
                    $query->orwhereRaw('taste_id = ?)', [$value]);
                }
            }
            $query->join('cocktails_tastes', 'cocktails.id', '=', 'cocktails_tastes.cocktail_id');
        }


        //アルコール度数検索
        $strength_search = $request->input('strength');

        if (!empty($strength_search)) {
            foreach($strength_search as $value){
                if($value === reset($strength_search)){
                    $query->whereRaw('(strength_id = ?', [$value]);
                }
                $query->orwhereRaw('strength_id = ?', [$value]);
                if($value === end($strength_search)){
                    $query->orwhereRaw('strength_id = ?)', [$value]);
                }
            }
            $query->join('cocktails_strengths', 'cocktails.id', '=', 'cocktails_strengths.cocktail_id');
        }


        //製法検索
        $technique_search = $request->input('technique');

        if (!empty($technique_search)) {
            foreach($technique_search as $value){
                if($value === reset($technique_search)){
                    $query->whereRaw('(technique_id = ?', [$value]);
                }
                $query->orwhereRaw('technique_id = ?', [$value]);
                if($value === end($technique_search)){
                    $query->orwhereRaw('technique_id = ?)', [$value]);
                }
            }
            $query->join('cocktails_techniques', 'cocktails.id', '=', 'cocktails_techniques.cocktail_id');
        }


        //グラスタイプ検索
        $glass_search = $request->input('glass');

        if (!empty($glass_search)) {
            foreach($glass_search as $value){
                if($value === reset($glass_search)){
                    $query->whereRaw('(glass_id = ?', [$value]);
                }
                $query->orwhereRaw('glass_id = ?', [$value]);
                if($value === end($glass_search)){
                    $query->orwhereRaw('glass_id = ?)', [$value]);
                }
            }
            $query->join('cocktails_glasses', 'cocktails.id', '=', 'cocktails_glasses.cocktail_id');
        }
    
        //検索結果を取得
        $cocktails = $query
                        ->orderBy('cocktails.name', 'asc')
                        ->paginate(9);

        return view('home', compact('text_search','base_search', 'cocktails', 'bases', 'glasses', 'splits', 'strengths', 'tastes', 'techniques'));
    }


    public function show($id)
    {
        $base = cocktail::from('cocktails as cock')
        ->leftjoin('cocktails_bases as cb', 'cock.id', '=', 'cb.cocktail_id')
        ->join('bases as ba', 'cb.base_id', '=', 'ba.id')
        ->where('cock.id', $id)
        ->select('ba.name')
        ->get();

        $glass = cocktail::from('cocktails as cock')
        ->leftjoin('cocktails_glasses as cg', 'cock.id', '=', 'cg.cocktail_id')
        ->join('glasses as gl', 'cg.glass_id', '=', 'gl.id')
        ->where('cock.id', $id)
        ->select('gl.name')
        ->get();

        $split = cocktail::from('cocktails as cock')
        ->leftjoin('cocktails_splits as csp', 'cock.id', '=', 'csp.cocktail_id')
        ->join('splits as sp', 'csp.split_id', '=', 'sp.id')
        ->where('cock.id', $id)
        ->select('sp.name')
        ->get();
        
        $strength = cocktail::from('cocktails as cock')
        ->leftjoin('cocktails_strengths as cst', 'cock.id', '=', 'cst.cocktail_id')
        ->join('strengths as st', 'cst.strength_id', '=', 'st.id')
        ->where('cock.id', $id)
        ->select('st.name')
        ->get();

        $taste = cocktail::from('cocktails as cock')
        ->leftjoin('cocktails_tastes as cta', 'cock.id', '=', 'cta.cocktail_id')
        ->join('tastes as ta', 'cta.taste_id', '=', 'ta.id')
        ->where('cock.id', $id)
        ->select('ta.name')
        ->get();

        $technique = cocktail::from('cocktails as cock')
        ->leftjoin('cocktails_techniques as cte', 'cock.id', '=', 'cte.cocktail_id')
        ->join('techniques as te', 'cte.technique_id', '=', 'te.id')
        ->where('cock.id', $id)
        ->select('te.name')
        ->get();

        return view('show', compact('base','glass', 'split', 'strength', 'taste', 'technique'));
    }
}