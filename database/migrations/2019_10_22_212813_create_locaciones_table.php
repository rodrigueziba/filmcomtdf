<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->unique();
            $table->string('descripción')->nullable();
            $table->enum( 'ciudad', array ('ushuaia', 'tolhuin', 'rio grande'));
            $table->enum( 'jurisdiccion', array ('estatal', 'privado'));
            $table->integer('categoria_id')->unique()->unsigned()->nullable();
            $table->foreign('categoria_id')->references('id')->on('categoria_locaciones');
            $table->string('address_address');
            $table->string('redes_sociales')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('sitio_web')->nullable();
            $table->double('address_latitude')->nullable();
            $table->double('address_longitude')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locaciones');
        $table->dropForeign(['categoria_locaciones']);
    }
}
