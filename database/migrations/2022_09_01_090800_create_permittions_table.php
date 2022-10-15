<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermittionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permittions', function (Blueprint $table) {
            $table->id();
            $table->string('actions', 50);

            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_submodules');
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_submodules')->references('id')->on('submodules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permittions');
    }
}
