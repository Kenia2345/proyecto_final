<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Categoria;
use App\Models\Producto;

class ProductosController extends Controller
{
	public function index()
	{
		$productos = Producto::with('categoria')->get();

		return view('productos/index', compact('productos'));
	}

	public function crear()
	{
		$categorias = Categoria::all();

		return view('productos/agregar', compact('categorias'));
	}

	public function guardar(Request $request)
	{
		$datos = $request->validate([
           'nombre'=>'required|unique:productos',
           'categoria_id' => 'required',
           'precio'=>'required',
           'stock' => 'required'
    	]);

		if (Input::hasFile('imagen')) {
        	$file=Input::file('imagen');
        	$file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        	$producto->imagen=$file->getClientOriginalName();
        }

    	$producto = Producto::create($datos);

		return redirect('productos/index');
	}

	public function editar(Producto $producto)
	{
		$categorias = Categoria::all();

		return view('productos/editar', compact('producto', 'categorias'));
	}

	public function actualizar(Producto $producto, Request $request)
	{
		$datos = $request->validate([
           'nombre'=>'required|unique:productos,nombre,'.$producto->id,
           'categoria_id' => 'required|integer',
           'precio'=>'required',
           'stock' => 'required'
    	]);

		if (Input::hasFile('imagen')) {
        	$file=Input::file('imagen');
        	$file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        	$producto->imagen=$file->getClientOriginalName();
        }
    	
    	$producto->update($datos);

		return redirect('productos/index');
	}

	public function eliminar(Producto $producto)
	{
		$producto->delete();

		return back();
	}
}
