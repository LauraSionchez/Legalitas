<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->string('action', 50);
            $table->text('data_old');
            $table->text('data_new');
            $table->timestamp('date', $precision = 0);

            $table->unsignedBigInteger('id_modules');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_modules')->references('id')->on('modules');
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
}
