<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\cocktail;
use App\base;

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
    public function index()
    {
        $cocktails = DB::table('cocktails')->paginate(9);
        //dd($cocktails);
        return view('home', compact('cocktails'));
    }

    public function show($id)
    {
        $cocktail = DB::table('cocktails')
        ->join('bases', 'cocktails.base_id', '=', 'bases.base_id')
        ->select('cocktails.*', 'bases.base_name')
        ->where('cocktails.id', $id)
        ->first();
        return view('show', compact('cocktail'));
    }
}
