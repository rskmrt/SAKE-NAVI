<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cocktail;

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
        $cocktails = \DB::table('cocktails')->paginate(9);
        //dd($cocktails);
        return view('home', compact('cocktails'));
    }

    public function show($id)
    {
        $cocktail = \DB::table('cocktails')->where('id', $id)
          ->first();
        return view('show', compact('cocktail'));
    }
}
