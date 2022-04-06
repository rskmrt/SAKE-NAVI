<?php

namespace App\Http\Controllers;

use App\cocktail;
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
        $cocktail = cocktail::where('cocktails.id', $id)
        ->join('cocktails_bases', 'cocktails.id', '=', 'cocktails_bases.id')
        ->join('bases', 'cocktails_bases.base_id', '=', 'bases.id')
        // ->join('glasses', 'cocktails.glass_id', '=', 'glasses.glass_id')
        // ->join('techniques', 'cocktails.technique_id', '=', 'techniques.technique_id')
        // ->join('strengths', 'cocktails.strength_id', '=', 'strengths.strength_id')
        // ->join('tastes', 'cocktails.taste_id', '=', 'tastes.taste_id')
        ->first();
        //dd($cocktail);
        return view('show', compact('cocktail'));
    }
}
