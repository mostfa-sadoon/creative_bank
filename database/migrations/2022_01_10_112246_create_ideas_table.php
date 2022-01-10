<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('field_id');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
            $table->enum('status', ['true','false'])->default('false');
            $table->string('img');
            $table->string('attatchment')->nullable();
            $table->text('problem');
            $table->text('video_link')->nullable();
            $table->text('solve');
            $table->integer('view')->default(0);
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
        Schema::dropIfExists('ideas');
    }
}
