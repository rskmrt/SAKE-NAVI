<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@test',
            'password' => Hash::make('12345678'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
