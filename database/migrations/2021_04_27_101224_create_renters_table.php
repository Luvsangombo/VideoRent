<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->id();
            $table->String('surname');
            $table->String('name');
            $table->integer('Phone');
            $table->String('email');
            $table->String('username');
            $table->String('password');
            $table->DateTime('date_of_birth');
            $table->String('token')->default('');
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
        Schema::dropIfExists('renters');
    }
}
