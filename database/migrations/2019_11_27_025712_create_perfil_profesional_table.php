<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_profesionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles_profesionales');
    }
}
