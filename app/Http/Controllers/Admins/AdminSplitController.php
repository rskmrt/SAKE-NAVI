<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Split;

class AdminSplitController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //材料をすべて取得
        $admin_splits = Split::sortable()->get();

        return view('admins.cocktails.split', compact('admin_splits'));
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
            'name' => 'required|max:255|unique:splits',
        ]);
        
        //入力内容を取得
        $data = $request->input();
        
        //splitsテーブルのnameに入力内容を登録
        Split::insert([
            'name' => $data['name']
        ]);

        return redirect()->back()->with('store', '材料を登録しました');
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
            'name' => 'required|max:255|unique:splits,name,'.Split::find($id)->name.',name',
        ]);

        //入力内容を取得
        $data = $request->input();
        
        //splitsテーブルのnameを入力内容に更新
        Split::Where('id', $id)->update(['name' => $data['name']]);

        return redirect()->back()->with('update', '材料を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //取得したidの材料を削除
        Split::where('id', $id)->delete();

        return redirect()->back()->with('delete', '材料を削除しました');
    }
}
