<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            BasesTableSeeder::class,
            CocktailsSplitsTableSeeder::class,
            CocktailsTableSeeder::class,
            GlassesTableSeeder::class,
            PreparationsTableSeeder::class,
            SplitsTableSeeder::class,
            StrengthTableSeeder::class,
            TasteTableSeeder::class
        ]);
    }
}
