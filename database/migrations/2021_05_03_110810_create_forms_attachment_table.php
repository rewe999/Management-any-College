<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_attachment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("attachment_id");
            $table->foreign("attachment_id")->references("id")->on("forms")
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
        Schema::dropIfExists('forms_attachment');
    }
}
