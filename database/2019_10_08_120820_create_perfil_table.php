<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_profesional', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('usuario_id')->unique();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nombre_publico');
            $table->string('profile_image')->nullable();
            $table->date('fecha_nacimiento');
            $table->longText('bio');
            $table->longText('bio_ingles');
            $table->string('reel');
            $table->enum( 'ubicacion', array ('Rio Grande', 'Tolhuin', 'Ushuaia'));
            $table->string('email_publico');
            $table->string('telefono_publico');
            $table->string('redes_sociales');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_profesional');
    }
}
