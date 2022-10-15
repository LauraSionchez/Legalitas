<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_masters', function (Blueprint $table) {
            $table->id();
            $table->string('description', 200);
            $table->boolean('status')->default(true);

            $table->unsignedBigInteger('id_tb_tables');
            $table->foreign('id_tb_tables')->references('id')->on('tb_tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_masters');
    }
}
