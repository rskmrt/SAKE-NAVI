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
            CocktailsTableSeeder::class,
            GlassesTableSeeder::class,
            SplitsTableSeeder::class,
            StrengthTableSeeder::class,
            TasteTableSeeder::class,
            TechniqueTableSeeder::class,
            CocktailsBasesTableSeeder::class,
            CocktailsSplitsTableSeeder::class,
            CocktailsGlassesTableSeeder::class,
            CocktailsTastesTableSeeder::class,
            CocktailsStrengthsTableSeeder::class,
            CocktailsTechniquesTableSeeder::class
        ]);
    }
}
