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
                'name' => '弱い'
            ],[
                'name' => '普通'
            ],[
                'name' => '強い'
            ]
        ]);
    }
}
