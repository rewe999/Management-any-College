<?php

use App\Http\Models\Organizational;
use Illuminate\Database\Seeder;

class OrganizationalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Organizational::class,10)->create();
    }
}
