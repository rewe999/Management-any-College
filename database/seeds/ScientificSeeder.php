<?php

use App\Http\Models\Scientific;
use Illuminate\Database\Seeder;

class ScientificSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Scientific::class,10)->create();
    }
}
