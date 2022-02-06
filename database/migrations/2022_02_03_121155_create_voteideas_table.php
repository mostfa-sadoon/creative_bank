<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteideasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voteideas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vote_id');
            $table->foreign('vote_id')->references('id')->on('votes')->onDelete('cascade');
            $table->unsignedBigInteger('idea_id');
            $table->foreign('idea_id')->references('id')->on('ideas')->onDelete('cascade');
            $table->integer('count');
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
        Schema::dropIfExists('voteideas');
    }
}
