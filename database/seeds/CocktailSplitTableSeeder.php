<?php

use Illuminate\Database\Seeder;

class CocktailSplitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_split')->insert([
            [
                'cocktail_id' => '1',
                'split_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '3',
                'split_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '4',
                'split_id' => '6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '5',
                'split_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '6',
                'split_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '7',
                'split_id' => '6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '9',
                'split_id' => '11',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '10',
                'split_id' => '6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '11',
                'split_id' => '7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '12',
                'split_id' => '8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '13',
                'split_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '14',
                'split_id' => '8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '15',
                'split_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '16',
                'split_id' => '10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '17',
                'split_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '18',
                'split_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '19',
                'split_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '20',
                'split_id' => '7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '20',
                'split_id' => '13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '21',
                'split_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '22',
                'split_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '23',
                'split_id' => '8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '24',
                'split_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '25',
                'split_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '26',
                'split_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '27',
                'split_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '28',
                'split_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '29',
                'split_id' => '7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],
        ]);
    }
}
