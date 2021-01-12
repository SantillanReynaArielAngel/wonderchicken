<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->text('descripcion');
            $table->double('precio',2,2);
            $table->integer('cantidad');
            $table->string('imagen')->unique();
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
        Schema::dropIfExists('presas');
    }
}
