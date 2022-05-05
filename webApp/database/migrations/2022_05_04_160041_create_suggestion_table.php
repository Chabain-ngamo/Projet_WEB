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
            $table->unsignedBigInteger('id_student');
            $table->unsignedBigInteger('id_ideabox');
            
            $table->foreign('id_student')->references('id')->on('student');
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
