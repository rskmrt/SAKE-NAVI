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
                'glass_id' => '1',
                'taste_id' => '3',
                'technique_id' => '3',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ジンバック',
                'glass_id' => '1',
                'taste_id' => '1',
                'technique_id' => '1',
                'strength_id' => '3',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ウォッカトニック',
                'glass_id' => '1',
                'taste_id' => '4',
                'technique_id' => '4',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'モスコミュール',
                'glass_id' => '1',
                'taste_id' => '2',
                'technique_id' => '1',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ラムトニック',
                'glass_id' => '1',
                'taste_id' => '1',
                'technique_id' => '1',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'キューバリブレ',
                'glass_id' => '1',
                'taste_id' => '3',
                'technique_id' => '1',
                'strength_id' => '2',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'テキーラトニック',
                'glass_id' => '1',
                'taste_id' => '1',
                'technique_id' => '3',
                'strength_id' => '3',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ライムサワー',
                'glass_id' => '1',
                'taste_id' => '1',
                'technique_id' => '1',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'レモンサワー',
                'glass_id' => '1',
                'taste_id' => '1',
                'technique_id' => '1',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'コークハイ',
                'glass_id' => '1',
                'taste_id' => '3',
                'technique_id' => '2',
                'strength_id' => '1',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
            ],[
                'name' => 'ジンソニック',
                'glass_id' => '1',
                'taste_id' => '4',
                'technique_id' => '4',
                'strength_id' => '3',
                'how_to' => '氷を入れたタンブラーに「ROKU」を注ぎ、冷やしたトニックウォーターとソーダ水（1 : 1の割合）で満たし、軽くステア。好みでレモン、またはライムを加える。',
                'authority' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(), 
                ]
        ]);
    }
}
