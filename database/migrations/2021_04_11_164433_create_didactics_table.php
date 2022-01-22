<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDidacticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('didactics', function (Blueprint $table) {
            $table->id();
            $table->longText('data');
            $table->string('url',150);
            $table->unsignedBigInteger("people_id");
            $table->foreign("people_id")->references("id")->on("people")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('didactics');
    }
}
