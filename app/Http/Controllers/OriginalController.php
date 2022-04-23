<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use App\Models\Base;
use App\Models\CocktailBase;
use App\Models\CocktailSplit;
use App\Models\CocktailGlass;
use App\Models\CocktailTaste;
use App\Models\CocktailStrength;
use App\Models\CocktailTechnique;
use App\Models\Taste;
use App\Models\Split;
use App\Models\Strength;
use App\Models\Technique;
use App\Models\Glass;
use Illuminate\Http\Request;
use Auth;

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
        $user = Auth::user();
        $cocktails = Cocktail::where('user_id', $user['id'])->where('authority', 2)->where('status', 1)->paginate(9);

        return view('index\originals\original', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $bases = Base::get();
        $glasses = Glass::get();
        $splits = Split::get();
        $strengths = Strength::get();
        $tastes = Taste::get();
        $techniques = Technique::get();

        return view('index\originals\create', compact('user', 'bases', 'glasses', 'splits', 'strengths', 'tastes', 'techniques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $cocktail_id = Cocktail::insertGetId([
            'name' => $data['name'],
            'authority' => 2,
            'user_id' => $data['user_id'],
            'status' => 1
        ]);
        
        if(!empty($data['base'])){
            CocktailBase::insert([
                'cocktail_id' => $cocktail_id,
                'base_id' => $data['base']
            ]);
    
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

        return redirect('original');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
