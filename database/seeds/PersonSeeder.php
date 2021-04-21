<?php

use App\People;
use Illuminate\Database\Seeder;
use Database\Factories\PersonFactory;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(People::class,10)->create();
    }
}
