<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasLocacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_locaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('categoriaLocaciones_id')->unsigned();
             $table->foreign('categoriaLocaciones_id')->references('id')->on('categoria_locaciones');
            $table->integer('locacion_id')->unsigned();
            $table->foreign('locacion_id')->references('id')->on('locaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_locaciones');
    }
}
