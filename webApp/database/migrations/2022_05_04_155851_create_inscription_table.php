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
        Schema::create('inscription', function (Blueprint $table) {
            $table->date('inscriptiondate');
            $table->unsignedBigInteger('id_student');
            $table->unsignedBigInteger('id_activity');
            
            $table->foreign('id_student')->references('id')->on('student');
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
        Schema::dropIfExists('inscription');
    }
};
