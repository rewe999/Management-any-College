<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('name',30);
            $table->string('surname',30);
            $table->string('section',50);
            $table->string('position',50);
            $table->string('gender',30);
            $table->date('birth_date');
            $table->string('avatar')->nullable();
            $table->boolean('active')->default(true);
            $table->string('email',50);
            $table->string('url',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
