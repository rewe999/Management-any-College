<?php

use App\Http\Models\Didactic;
use Illuminate\Database\Seeder;

class DidacticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Didactic::class,10)->create();
    }
}
