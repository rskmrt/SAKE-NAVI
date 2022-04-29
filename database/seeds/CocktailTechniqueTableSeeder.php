<?php

use Illuminate\Database\Seeder;

class CocktailTechniqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_technique')->insert([
            [
                'cocktail_id' => '1',
                'technique_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '2',
                'technique_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '3',
                'technique_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '4',
                'technique_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '5',
                'technique_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '6',
                'technique_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '7',
                'technique_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '8',
                'technique_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '9',
                'technique_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '10',
                'technique_id' => '6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ]
        ]);
    }
}
