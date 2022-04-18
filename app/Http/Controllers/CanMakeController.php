<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\BaseUser;
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
        $bases = BaseUser::pluck('base_id')->toArray();
        $cocktails = [];
        foreach($bases as $base){
            $cocktail = Base::find($base)->cocktails()->get();
            array_push($cocktails, $cocktail);
        }
 
        return view('can-make', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bases = Base::get();
        $splits = Split::get();
        return view('ingredients-regist', compact('bases', 'splits'));
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
        
        

        return redirect()->back();
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
    public function destroy(Base $base)
    {
        $base->users()->detach(Auth::id());

        return redirect()->back();
    }
}
