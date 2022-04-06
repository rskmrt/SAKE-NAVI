<?php

use Illuminate\Database\Seeder;

class BasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bases')->insert([
            [
                'name' => 'ウォッカ'
            ],[
                'name' => 'ジン'
            ],[
                'name' => 'ラム'
            ],[
                'name' => 'テキーラ'
            ],[
                'name' => '焼酎'
            ],[
                'name' => 'ウィスキー'
            ]
        ]);
    }
}
