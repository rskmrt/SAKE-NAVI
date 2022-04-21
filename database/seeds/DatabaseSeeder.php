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
            CocktailsTableSeeder::class,
            BasesTableSeeder::class,
            GlassesTableSeeder::class,
            SplitsTableSeeder::class,
            StrengthTableSeeder::class,
            TasteTableSeeder::class,
            TechniqueTableSeeder::class,
            CocktailBaseTableSeeder::class,
            CocktailSplitTableSeeder::class,
            CocktailGlassTableSeeder::class,
            CocktailTasteTableSeeder::class,
            CocktailStrengthTableSeeder::class,
            CocktailTechniqueTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
