<?php

use Illuminate\Database\Seeder;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techniques')->insert([
            [
                'name' => 'ビルド'
            ],[
                'name' => 'ステア'
            ],[
                'name' => 'シェイク'
            ],[
                'name' => 'ブレンド'
            ]
        ]);
    }
}
