<?php

use Illuminate\Database\Seeder;

class BasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bases')->insert([
            [
                'name' => 'ウォッカ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),                
            ],[
                'name' => 'ジン',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],[
                'name' => 'ラム',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),                
            ],[
                'name' => 'テキーラ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'カンパリ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '焼酎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ウィスキー',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ブランデー',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '赤ワイン',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => '白ワイン',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ベルモット',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ビール',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ホワイトキュラソー',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],
            
        ]);
    }
}
