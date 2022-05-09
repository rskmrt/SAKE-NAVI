<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Base;
use App\Models\Cocktail;

class AdminBaseController extends Controller
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
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ベースをすべて取得
        $admin_bases = Base::sortable()->get();

        return view('admins.cocktails.base', compact('admin_bases'));
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
            'name' => 'required|max:255|unique:bases',
        ]);
        
        //入力内容を取得
        $data = $request->input();

        //baseテーブルのnameに入力内容を登録
        Base::insert([
            'name' => $data['name']
        ]);

        return redirect()->back()->with('store', 'ベースを登録しました');
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
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:bases,name,'.Base::find($id)->name.',name',
        ]);

        //入力内容を取得
        $data = $request->input();

        //baseテーブルのnameを入力内容に更新
        Base::Where('id', $id)->update(['name' => $data['name']]);

        return redirect()->back()->with('update', 'ベースを更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //取得したidのベースを削除
        Base::where('id', $id)->delete();

        return redirect()->back()->with('delete', 'ベースを削除しました');
    }
}
