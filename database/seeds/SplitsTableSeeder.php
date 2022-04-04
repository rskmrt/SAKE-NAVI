<?php

use Illuminate\Database\Seeder;

class SplitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('splits')->insert([
            [
                'split_id' => '1',
                'split_name' => 'ソーダ'
            ],[
                'split_id' => '2',
                'split_name' => 'トニックウォーター'
            ],[
                'split_id' => '3',
                'split_name' => 'ジンジャーエール'
            ],[
                'split_id' => '4',
                'split_name' => 'ライムジュース'
            ]
        ]);
    }
}
