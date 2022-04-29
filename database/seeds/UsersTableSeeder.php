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
            'name' => 'ryosuke',
            'email' => 'ryo@test',
            'password' => Hash::make('12345678'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),  
        ]);
    }
}
