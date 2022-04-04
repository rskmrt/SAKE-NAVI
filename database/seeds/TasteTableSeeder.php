<?php

use Illuminate\Database\Seeder;

class TasteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->insert([
            [
                'taste_id' => '1',
                'taste_name' => '甘口'
            ],[
                'taste_id' => '2',
                'taste_name' => '中辛'
            ],[
                'taste_id' => '3',
                'taste_name' => '辛口'
            ],[
                'taste_id' => '4',
                'taste_name' => '中甘辛口'
            ]
        ]);
    }
}
