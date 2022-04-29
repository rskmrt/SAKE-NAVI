<?php

use Illuminate\Database\Seeder;

class TechniqueTableSeeder extends Seeder
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
                'name' => 'ビルド',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ステア',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'シェイク',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ブレンド',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ]
        ]);
    }
}
