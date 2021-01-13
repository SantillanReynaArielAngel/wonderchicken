<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');       //Wonder Chicken
            $table->string('direccion');        // Av.  de las americas
            $table->integer('numero_domicilio');    //317
            $table->string('propietario'); //Erick Antonio Hurtado Zardan
            $table->string('telefono')->nullable();
            $table->string('cuenta_bancaria')->nullable();      // para reaizar los pagos online.
            $table->string('logotipo')->nullable();     //imagen
            $table->string('latitud');      // -19.044470222559507 
            $table->string('longuitud');    // -65.24537198842745
            $table->enum('estado',['abierto','cerrado']); //2 tipos

            $table->unsignedBigInteger('nit_emisor'); //o bigInteger. 5640971015
            $table->string('municipio')->nullable();  //dato para factura
            $table->string('cuf')->nullable();      //dato para factura Código único de facturación (CUF)
            $table->string('cufd')->nullable();     // dato para factura Codigo unico de facturacion diario
            $table->integer('codigo_sucursal')->nullable(); //dato para factura, podria ser casa matriz=1 y otras sucursales los restantes numeros
            $table->string('leyenda')->nullable(); //asosciada ala actividad economica o "Donde mucho no es suficiente"
            $table->string('actividad_economica')->nullable();  // dato para facturacion, este esta registrado en impuestos
            
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
        Schema::dropIfExists('empresas');
    }
}
