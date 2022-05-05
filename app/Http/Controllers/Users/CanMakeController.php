<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\BaseUser;
use App\Models\SplitUser;
use App\Models\Base;
use App\Models\Split;
use Auth;

class CanMakeController extends Controller
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
        //登録しているベースと材料のIDを取得
        $bases_id = BaseUser::where('user_id', Auth::id())->pluck('base_id')->toArray();
        $splits_id = SplitUser::where('user_id', Auth::id())->pluck('split_id')->toArray();
        
        $query = Cocktail::query()->select('cocktails.*');
        
        //登録しているベースと材料のIDからカクテルを取得
        $query->wherein('cocktail_split.split_id', $splits_id)->join('cocktail_split', 'cocktails.id', '=', 'cocktail_split.cocktail_id');
        $query->wherein('cocktail_base.base_id', $bases_id)->join('cocktail_base', 'cocktails.id', '=', 'cocktail_base.cocktail_id');
        
        $cocktails = $query
        ->orderBy('name', 'asc')
        ->paginate(9);

        return view('users.can-makes.can-make', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.can-makes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bases = Base::find($request->input('base'));
        $splits = Split::find($request->input('split'));

        if(!empty($bases)){
            foreach($bases as $base){
                $base->users()->attach(Auth::id());
            }
        }
        
        if(!empty($splits)){
            foreach($splits as $split){
                $split->users()->attach(Auth::id());
            }
        }
        
        return redirect('can-make');
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
    public function destroy(Request $request)
    {
        $bases = Base::find($request->input('base'));
        $splits = Split::find($request->input('split'));

        if(!empty($bases)){
            foreach($bases as $base){
                $base->users()->detach(Auth::id());
            }
        }

        if(!empty($splits)){
            foreach($splits as $split){
                $split->users()->detach(Auth::id());
            }
        }
        
        return redirect()->back();
    }
    
}
