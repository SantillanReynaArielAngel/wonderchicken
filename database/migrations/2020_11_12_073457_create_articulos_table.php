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
            $table->double('precio',2,2);
            $table->integer('cantidad');
            $table->string('imagen')->unique();
            $table->boolean('estado')->default(true);

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
