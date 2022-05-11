<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('look', function (Blueprint $table) {
            $table->unsignedBigInteger('id_activity');
            $table->unsignedBigInteger('id_users');

            $table->foreign('id_activity')->references('id')->on('activity');
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
        Schema::dropIfExists('look');
    }
};
