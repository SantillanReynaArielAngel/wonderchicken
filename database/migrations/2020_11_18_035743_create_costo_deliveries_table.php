<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostoDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costo_deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('direccion');
            $table->string('zona');
            $table->double('km',2,2);
            $table->double('precio',2,2);

            $table->timestamps();
            $table->foreignId('pedido_id')->constrained()
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
        Schema::dropIfExists('costo_deliveries');
    }
}
