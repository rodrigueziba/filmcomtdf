<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilerVentaDistribucionProductorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler_venta_distribucion_productoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
              $table->integer('perfil_id')->unsigned();
             $table->foreign('perfil_id')->references('id')->on('perfiles_productoras');
            $table->integer('alquiler_id')->unsigned();
            $table->foreign('alquiler_id')->references('id')->on('alquiler_venta_distribucion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquiler_venta_distribucion_productoras');
    }
}
