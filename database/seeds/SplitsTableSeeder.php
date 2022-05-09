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
                'name' => 'ソーダ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'トニックウォーター',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ジンジャーエール',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'コーラ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'レモン',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ライム',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'オレンジジュース',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'グレープフルーツジュース',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'パイナップルジュース',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'リンゴジュース',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'トマトジュース',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ガムシロップ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],
        ]);
    }
}
