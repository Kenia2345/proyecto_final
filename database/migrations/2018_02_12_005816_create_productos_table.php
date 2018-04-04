<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');//increments = entero autoincrementable
            $table->unsignedInteger('categoria_id');//enteros positivos y que se relacionara con categorias
            $table->string('nombre', 50);//varchar de longitud 50
            $table->double('precio');
            $table->smallInteger('stock');//este asi venia en el sql, creo son enteros
            $table->string('imagen');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            //la tabla productos se relaciona(referencia) el campo categoria_id con el campo id de la tabla categorias
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
