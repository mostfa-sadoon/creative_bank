<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('ideaRate_ar');
            $table->text('ideaRate_en');
            $table->text('ideaStudy_ar');
            $table->text('ideaStudy_en');
            $table->text('acceptedIdea_ar');
            $table->text('acceptedIdea_en');
            $table->text('vision_ar');
            $table->text('vision_en');
            $table->text('mission_ar');
            $table->text('mission_en');
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
        Schema::dropIfExists('abouts');
    }
}
