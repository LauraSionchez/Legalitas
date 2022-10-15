<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('description', 200);
            $table->string('code', 4);
            $table->boolean('status')->default(true);

            $table->unsignedBigInteger('id_region');
            $table->foreign('id_region')->references('id')->on('tb_masters');

            $table->unsignedBigInteger('id_countries');
            $table->foreign('id_countries')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
