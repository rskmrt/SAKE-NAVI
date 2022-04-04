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
                'glass_id' => '1',
                'glass_name' => 'タンブラー'
            ],[
                'glass_id' => '2',
                'glass_name' => 'カクテルグラス'
            ],[
                'glass_id' => '3',
                'glass_name' => 'ロック'
            ],[
                'glass_id' => '4',
                'glass_name' => 'その他'
            ]
        ]);
    }
}
