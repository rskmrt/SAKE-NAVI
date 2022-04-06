<?php

use Illuminate\Database\Seeder;

class SplitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('splits')->insert([
            [
                'name' => 'ソーダ'
            ],[
                'name' => 'トニックウォーター'
            ],[
                'name' => 'ジンジャーエール'
            ],[
                'name' => 'コーラ'
            ],[
                'name' => 'レモン'
            ],[
                'name' => 'ライム'
            ]
        ]);
    }
}
