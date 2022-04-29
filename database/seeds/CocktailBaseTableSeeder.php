<?php

use Illuminate\Database\Seeder;

class CocktailBaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_base')->insert([
            [
                'cocktail_id' => '1',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '2',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '3',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'cocktail_id' => '4',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '5',
                'base_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '6',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '7',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '8',
                'base_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'cocktail_id' => '9',
                'base_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '10',
                'base_id' => '6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '11',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ]
        ]);
    }
}
