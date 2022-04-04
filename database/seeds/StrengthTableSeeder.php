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
                'strength_id' => '1',
                'strength_name' => '弱い'
            ],[
                'strength_id' => '2',
                'strength_name' => '普通'
            ],[
                'strength_id' => '3',
                'strength_name' => '強い'
            ]
        ]);
    }
}
