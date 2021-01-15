<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->double('precio')->unsigned(); //('precio',2,2)//Pregunta: habra un articulo que pueda costar mas de 99bs es decir ese 'precio',2,2 esta bien?
            $table->integer('cantidad')->unsigned();
            $table->string('imagen')->unique();
            $table->boolean('estado')->default(true);  //1=disponible 0=agotado otra opcion $table->enum('estado',['disponible','agotado'])

            $table->morphs('articuloable');//parametro= minuscula_nombre_modelo(tabla)+"able". Creara las columnas parametro_id y parametro_type

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
        Schema::dropIfExists('articulos');
    }
}
