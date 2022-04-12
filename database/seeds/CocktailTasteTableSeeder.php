<?php

use Illuminate\Database\Seeder;

class CocktailTasteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_taste')->insert([
            [
                'cocktail_id' => '1',
                'taste_id' => '2'
            ],[
                'cocktail_id' => '2',
                'taste_id' => '2'
            ],[
                'cocktail_id' => '3',
                'taste_id' => '1'
            ],[
                'cocktail_id' => '4',
                'taste_id' => '1'
            ],[
                'cocktail_id' => '5',
                'taste_id' => '3'
            ],[
                'cocktail_id' => '6',
                'taste_id' => '4'
            ],[
                'cocktail_id' => '7',
                'taste_id' => '4'
            ],[
                'cocktail_id' => '8',
                'taste_id' => '5'
            ],[
                'cocktail_id' => '9',
                'taste_id' => '5'
            ],[
                'cocktail_id' => '10',
                'taste_id' => '6'
            ]
        ]);
    }
}
