<?php

use Illuminate\Database\Seeder;

class GlassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('glasses')->insert([
            [
                'name' => 'タンブラー'
            ],[
                'name' => 'カクテルグラス'
            ],[
                'name' => 'ロック'
            ],[
                'name' => 'その他'
            ]
        ]);
    }
}
