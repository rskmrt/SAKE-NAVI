<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@test',
                'password' => Hash::make('12345678'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'name' => 'test2',
                'email' => 'test2@test',
                'password' => Hash::make('12345678'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],[
                'name' => 'test3',
                'email' => 'test3@test',
                'password' => Hash::make('12345678'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),  
            ],
        ]);
    }
}
