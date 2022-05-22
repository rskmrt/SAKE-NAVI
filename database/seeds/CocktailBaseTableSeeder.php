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
                'cocktail_id' => '2',
                'base_id' => '11',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '3',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'cocktail_id' => '3',
                'base_id' => '13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'cocktail_id' => '4',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '5',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '6',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '7',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '8',
                'base_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '8',
                'base_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '9',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '10',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '10',
                'base_id' => '13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '11',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '12',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '13',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '13',
                'base_id' => '13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '14',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '15',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '16',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '17',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '18',
                'base_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '19',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '20',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '21',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '21',
                'base_id' => '14',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '22',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '22',
                'base_id' => '13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '23',
                'base_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '24',
                'base_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '25',
                'base_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '26',
                'base_id' => '7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '27',
                'base_id' => '12',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '28',
                'base_id' => '9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'cocktail_id' => '29',
                'base_id' => '14',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],
        ]);
    }
}
