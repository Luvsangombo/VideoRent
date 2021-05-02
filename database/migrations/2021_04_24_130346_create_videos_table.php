<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('catelog_id');
            $table->bigInteger('section_id');
            $table->string('name', 50);
            $table->bigInteger('length');
            $table->string('director',50);
            $table->boolean('is_rented')->default(false);
            $table->bigInteger('rented_times')->default('0');
            $table->bigInteger('price');
            $table->string('image_path');
            $table->string('highlight_path');
            $table->string('description',500);
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
        Schema::dropIfExists('videos');
    }
}
