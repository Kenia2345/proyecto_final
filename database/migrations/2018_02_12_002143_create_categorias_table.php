<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // si la tabla no existe la crea al ejecutar el comando: php artisan migrate
        Schema::create('categorias', function (Blueprint $table) {
            // estas son las columnas de la tabla
            $table->increments('id'); // siempre se debe llamar id, ponerle idCategoria esta demas
            $table->string('nombre');
            $table->string('descripcion');
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
        // si tenemos que deshacerla o algo no va, etc. podemos ejecutar: php artisan migrate:rollback
        // y se borrara si existe... junto con todo lo que se migro la ultima vez
        Schema::dropIfExists('categorias');
    }
}
