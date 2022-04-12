<?php

use Illuminate\Database\Seeder;

class CocktailStrengthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_strength')->insert([
            [
                'cocktail_id' => '1',
                'strength_id' => '2'
            ],[
                'cocktail_id' => '2',
                'strength_id' => '2'
            ],[
                'cocktail_id' => '3',
                'strength_id' => '1'
            ],[
                'cocktail_id' => '4',
                'strength_id' => '1'
            ],[
                'cocktail_id' => '5',
                'strength_id' => '3'
            ],[
                'cocktail_id' => '6',
                'strength_id' => '4'
            ],[
                'cocktail_id' => '7',
                'strength_id' => '4'
            ],[
                'cocktail_id' => '8',
                'strength_id' => '5'
            ],[
                'cocktail_id' => '9',
                'strength_id' => '5'
            ],[
                'cocktail_id' => '10',
                'strength_id' => '6'
            ]
        ]);
    }
}
