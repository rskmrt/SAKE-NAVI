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
                'base_id' => '1',
                'base_name' => 'ウォッカ'
            ],[
                'base_id' => '2',
                'base_name' => 'ジン'
            ],[
                'base_id' => '3',
                'base_name' => 'ラム'
            ],[
                'base_id' => '4',
                'base_name' => 'テキーラ'
            ]
        ]);
    }
}
