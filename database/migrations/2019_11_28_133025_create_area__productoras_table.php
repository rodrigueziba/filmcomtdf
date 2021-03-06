<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaProductorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area__productoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('perfil_id')->unsigned();
             $table->foreign('perfil_id')->references('id')->on('perfiles_productoras');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('area_desempenios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area__productoras');
    }
}
