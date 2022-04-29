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
                'name' => '甘口',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '中辛',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '辛口',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'name' => '中甘辛口',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ]
        ]);
    }
}
