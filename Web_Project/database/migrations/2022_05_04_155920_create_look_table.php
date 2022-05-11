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
            $table->unsignedBigInteger('id_cesi');
            $table->unsignedBigInteger('id_activity');
            $table->unsignedBigInteger('id_student');

            $table->foreign('id_cesi')->references('id')->on('cesi');
            $table->foreign('id_activity')->references('id')->on('activity');
            $table->foreign('id_student')->references('id')->on('student');
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
