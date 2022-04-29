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
                'name' => 'タンブラー',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'カクテルグラス',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ロック',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'その他',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ]
        ]);
    }
}
