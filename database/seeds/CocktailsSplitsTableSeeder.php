<?php

use Illuminate\Database\Seeder;

class CocktailsSplitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktails_splits')->insert([
            [
                'cocktail_id' => '1',
                'split_id' => '1'
            ],[
                'cocktail_id' => '1',
                'split_id' => '2'
            ],[
                'cocktail_id' => '2',
                'split_id' => '1'
            ],[
                'cocktail_id' => '2',
                'split_id' => '3'
            ],[
                'cocktail_id' => '3',
                'split_id' => '1'
            ],[
                'cocktail_id' => '3',
                'split_id' => '2'
            ],[
                'cocktail_id' => '4',
                'split_id' => '1'
            ],[
                'cocktail_id' => '4',
                'split_id' => '3'
            ],[
                'cocktail_id' => '5',
                'split_id' => '1'
            ],[
                'cocktail_id' => '5',
                'split_id' => '2'
            ],[
                'cocktail_id' => '6',
                'split_id' => '1'
            ],[
                'cocktail_id' => '6',
                'split_id' => '4'
            ],[
                'cocktail_id' => '7',
                'split_id' => '1'
            ],[
                'cocktail_id' => '7',
                'split_id' => '6'
            ],[
                'cocktail_id' => '8',
                'split_id' => '1'
            ],[
                'cocktail_id' => '8',
                'split_id' => '5'
            ],[
                'cocktail_id' => '9',
                'split_id' => '1'
            ],[
                'cocktail_id' => '9',
                'split_id' => '4'
            ],[
                'cocktail_id' => '10',
                'split_id' => '1'
            ],[
                'cocktail_id' => '10',
                'split_id' => '1'
            ],
        ]);
    }
}
