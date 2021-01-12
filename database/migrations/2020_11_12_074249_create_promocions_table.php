<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->double('precio');
            $table->integer('cantidad');
            $table->string('imagen');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('estado')->default(true);
            
            $table->timestamps();
            $table->foreignId('articulo_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // $table->foreignId('presa_id')->constrained()
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->foreignId('regalo_id')->constrained()
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
        Schema::dropIfExists('promocions');
    }
}
