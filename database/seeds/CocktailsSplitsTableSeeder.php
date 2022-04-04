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
            ]
        ]);
    }
}
