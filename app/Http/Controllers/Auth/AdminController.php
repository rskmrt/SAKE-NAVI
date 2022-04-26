<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $cocktails = Cocktail::paginate(9);
        return view('admins.index.home', compact('cocktails'));
    }

    public function users()
    {
        $cocktails = Cocktail::paginate(9);
        return view('admins.index.home', compact('cocktails'));
    }
}