<?php

namespace App\Http\Controllers;

use App\cocktail;
use App\cocktails_splits;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $cocktails = cocktail::paginate(9);

        //フォーム検索
        $search = $request->input('search');
        $query = cocktail::query();
        if ($search !== null) {
            $spaceConversion = mb_convert_kana($search, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $cocktails = $query->paginate(9);
        }

        return view('home', compact('cocktails', 'search'));
      
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

        //dd($base);
        return view('show', compact('base','glass', 'split', 'strength', 'taste', 'technique'));
    }
}
    

// $sql = "select a.id , b.split_id, c.name from cocktails a left join cocktails_splits b on a.id = b.cocktail_id left join splits c on b.split_id = c.id WHERE a.id ='1';";
        // $split = DB::select($sql);

// $cocktail = $base
// ->union($glass)
// ->union($strength)
// ->union($taste)
// ->union($technique)
// ->union($split)
// ->get();