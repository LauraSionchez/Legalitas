<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttorneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attorneys', function (Blueprint $table) {
            $table->id();
            $table->string('fist_name', 50);
            $table->string('fist_surname', 50);
            $table->string('phone', 15);
            $table->string('email', 150);
            $table->string('work_space', 50);
            $table->string('urbanization', 50);
            $table->boolean('status')->default(true);

            $table->unsignedBigInteger('id_states');
            $table->unsignedBigInteger('id_cities');
            $table->unsignedBigInteger('id_municipalities');
            $table->unsignedBigInteger('id_parishes');
            $table->foreign('id_states')->references('id')->on('states');
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->foreign('id_municipalities')->references('id')->on('municipalities');
            $table->foreign('id_parishes')->references('id')->on('parishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attorneys');
    }
}
