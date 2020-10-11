<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion', function (Blueprint $table) {
            $table->bigIncrements('id_produccion');
            $table->string('nom_producto');
            $table->date('fec_produccion');
            $table->tinyInteger('cant_produccion');
            $table->timestamps(); // crear los campos de create y update
            $table->softDeletes(); //crea el campo de delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produccion');
    }
}
