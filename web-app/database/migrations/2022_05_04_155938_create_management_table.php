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
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->date('postdate');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_activity');
            
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_product')->references('id')->on('product');
            $table->foreign('id_activity')->references('id')->on('activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management');
    }
};
