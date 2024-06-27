<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('docentes_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('docentes_id')->unsigned();
            $table->integer('grupos_id')->unsigned();
            $table->foreign('docentes_id')->references('id')->on('docentes');
            $table->foreign('grupos_id')->references('id')->on('grupos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('docentes_grupos');
    }
};