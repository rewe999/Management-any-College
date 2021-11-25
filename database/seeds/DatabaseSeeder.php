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
        $this->call([
            AdminSeeder::class,
            PersonSeeder::class,
            FormSeeder::class,
            NewSeeder::class,
            ScientificSeeder::class,
            DidacticsSeeder::class,
            OrganizationalsSeeder::class
        ]);
    }
}
