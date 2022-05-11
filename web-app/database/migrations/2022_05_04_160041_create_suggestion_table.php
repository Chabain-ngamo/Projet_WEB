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
        Schema::create('suggestion', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_ideabox');
            
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_ideabox')->references('id')->on('ideabox');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggestion');
    }
};
