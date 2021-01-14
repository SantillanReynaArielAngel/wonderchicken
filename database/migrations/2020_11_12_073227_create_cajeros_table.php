<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajeros', function (Blueprint $table) {
            $table->id();
            $table->integer('edad')->unsigned();
            $table->enum('sexo',['hombre','mujer']);
            $table->string('foto')->unique()->nullable();
            $table->enum('turno',['mañana','tarde']); //Pregunta: estaba bien colocar la ñ?

            $table->timestamps();
            $table->foreignId('persona_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajeros');
    }
}
