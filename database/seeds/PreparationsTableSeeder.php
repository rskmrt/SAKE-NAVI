<?php

use Illuminate\Database\Seeder;

class PreparationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preparations')->insert([
            [
                'preparation_id' => '1',
                'preparation_name' => 'ビルド'
            ],[
                'preparation_id' => '2',
                'preparation_name' => 'ステア'
            ],[
                'preparation_id' => '3',
                'preparation_name' => 'シェイク'
            ],[
                'preparation_id' => '4',
                'preparation_name' => 'ブレンド'
            ]
        ]);
    }
}
