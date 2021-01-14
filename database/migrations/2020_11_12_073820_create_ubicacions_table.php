<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('longitud');
            $table->string('latitud');
            $table->string('direccion');
            $table->integer('numero_domicilio')->unsigned()->nullable();
            $table->text('comentario')->nullable();

            $table->timestamps();

            //VERIFICAR SI LA RELACION ESTA BIEN ESCRITA
            // $table->foreignId('costo_delivery_id')->constrained()
            // ->onDelete('cascade')
            // ->onUpdate('cascade');

            //MEJOR UTILIZAREMOS EL MAS DESCRIIPTIVO
            //si mandamos la tabla como parametro para el constrained, el nombre de la columna de lla llave foranea puede  tomar otro valor. ejemplo abcd_costo_delivery_id 
            $table->foreignId('costo_delivery_id')->constrained('costo_deliveries')
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
        Schema::dropIfExists('ubicacions');
    }
}
