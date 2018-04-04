<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorias'; // por lo general solo se pone si el nombre es diferente al nombre del modelo en plural que seria categories

    protected $fillable = [
    	'nombre', 'descripcion'
    ]; // se define los campos, propiedades o atributos que se pueden asignar o llenar de forma masiva 

    //protected $guarded = [
    //	'id'
    //]; // se definen los que no pueden ser asignados como la forma de arriba pero solo puedes usar uno
    // usas fillable o usas guarded, y automaticamente los que no pongas en uno laravel sabe que van en el otro
    // si comento fillable y dejo guarded laravel sabe que todo lo demas se puede llenar de una sola vez

    protected $dates = [
    	'fecha_alta', 'fecha_baja', 
    ];// para indicarle a laravel que esa columna debe mostrarse como fecha

    public function productos()
    {
        retutn $this->hasMany(Producto::class);
    }
}
