<?php

use Illuminate\Database\Seeder;

class CocktailGlassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_glass')->insert([
            [
                'cocktail_id' => '1',
                'glass_id' => '2'
            ],[
                'cocktail_id' => '2',
                'glass_id' => '2'
            ],[
                'cocktail_id' => '3',
                'glass_id' => '1'
            ],[
                'cocktail_id' => '4',
                'glass_id' => '1'
            ],[
                'cocktail_id' => '5',
                'glass_id' => '3'
            ],[
                'cocktail_id' => '6',
                'glass_id' => '4'
            ],[
                'cocktail_id' => '7',
                'glass_id' => '4'
            ],[
                'cocktail_id' => '8',
                'glass_id' => '5'
            ],[
                'cocktail_id' => '9',
                'glass_id' => '5'
            ],[
                'cocktail_id' => '10',
                'glass_id' => '6'
            ]
        ]);
    }
}
