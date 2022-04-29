<?php

use Illuminate\Database\Seeder;

class StrengthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('strengths')->insert([
            [
                'name' => '弱い',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '普通',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '強い',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ]
        ]);
    }
}
