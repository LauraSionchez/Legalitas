<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosecutorCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posecutor_cases', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);

            $table->unsignedBigInteger('id_attorneys');
            $table->unsignedBigInteger('id_affairs');
            $table->foreign('id_attorneys')->references('id')->on('attorneys');
            $table->foreign('id_affairs')->references('id')->on('affairs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posecutor_cases');
    }
}
