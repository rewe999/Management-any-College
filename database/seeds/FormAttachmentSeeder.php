<?php

use App\Http\Models\FormAttachments;
use Illuminate\Database\Seeder;

class FormAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FormAttachments::class,10)->create();
    }
}
