<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->foreign("form_id")->references("id")->on("forms")
                ->onDelete("cascade");
            $table->string('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_attachments');
    }
}
