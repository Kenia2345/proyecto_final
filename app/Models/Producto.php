<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = array("nombre","precio", "stock", "categoria_id", "imagen");

    public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }
}
