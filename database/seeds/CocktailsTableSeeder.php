<?php

use Illuminate\Database\Seeder;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktails')->insert([
            [
                'name' => 'ジントニック',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ジンバック',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ウォッカトニック',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'モスコミュール',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ラムトニック',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'キューバリブレ',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'テキーラトニック',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ライムサワー',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'レモンサワー',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'コークハイ',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ジンソニック',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'status' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
                ]
        ]);
    }
}
