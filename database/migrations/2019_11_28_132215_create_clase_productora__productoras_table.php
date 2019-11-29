<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaseProductoraProductorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase_productora_productoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
             $table->integer('perfil_id')->unsigned();
             $table->foreign('perfil_id')->references('id')->on('perfiles_productoras');
            $table->integer('clase_id')->unsigned();
            $table->foreign('clase_id')->references('id')->on('clase_productoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clase_productora_productoras');
    }
}
