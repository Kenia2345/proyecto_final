<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class WelcomeController extends Controller
{
    public function index()
	{
		return view('paisas.index');
	}


	public function menu()
	{
		/*$tortas = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
			->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Tortas')
			->get();*/

		/*$platillos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Platillos')
			->get();

		$bebidas = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Bebidas')
			->get();

		$enchiladas = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Enchiladas')
			->get();

		$botanas = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Botanas')
			->get();

		$tostadas = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Tostadas')
			->get();

		$otros = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Otros')
			->get();

		$postres = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Postres')
			->get(); */

		return view('paisas.menu', compact('tortas', 'platillos', 'bebidas', 'enchiladas', 'botanas', 'tostadas', 'otros', 'postres'));
	}

	public function tortas()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
			->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Tortas')
			->get();

		return view('paisas.cartamenu.tortas')->with('productos', $productos);//, compact('productos'));
	}

	public function enchiladas()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Enchiladas')
			->get();

		return view('paisas.cartamenu.enchiladas', compact('productos'));
	}

	public function tostadas()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Tostadas')
			->get();

		return view('paisas.cartamenu.tostadas', compact('productos'));
	}


	public function platillos()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Platillos')
			->get();

		return view('paisas.cartamenu.platillos', compact('productos'));
	}

	public function otros()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Otros')
			->get();

		return view('paisas.cartamenu.otros', compact('productos'));
	}

	public function bebidas()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Bebidas')
			->get();

		return view('paisas.cartamenu.bebidas', compact('productos'));
	}
	

	public function botanas()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Botanas')
			->get();

		return view('paisas.cartamenu.botanas', compact('productos'));
	}

	public function postres()
	{
		$productos = Producto::select('categorias.nombre as categoria', 'productos.nombre', 'productos.precio')
		    ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
			->where('categorias.nombre', '=', 'Postres')
			->get();

		return view('paisas.cartamenu.postres', compact('productos'));
	}

	public function nosotros()
	{
		return view('paisas.nosotros');
	}

	
}

