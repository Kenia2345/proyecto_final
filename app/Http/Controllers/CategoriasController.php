<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function crear()
    {
        return view('categorias.agregar');
    }

    public function guardar(Request $request){
    	$datos = $request->validate([
           'nombre'=>'required|unique:categorias',
           'descripcion'=>'required'
    	]);
    	$categoria = Categoria::create($request->all());
    	
    	return redirect('categorias/index');
    }
 
    public function index(){
    	  $categorias = Categoria::all(); 
    	  return view('categorias/index',compact('categorias'));

    }

    public function editar(Categoria $categoria){
    	return view('categorias/editar',compact('categoria'));
    }

    public function actualizar(Categoria $categoria, Request $request){
    	$datos = $request->validate([
           'nombre'=>'required|unique:categorias,nombre,'.$categoria->id,
           'descripcion'=>'required'
    	]);
    	$categoria->update($datos);
    	
    	return redirect('categorias/index');
    }
    public function eliminar(Categoria $categoria){
    	$categoria->delete();
    	return back();
    }
}

