<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

	public function index()
	{
		$usuarios = User::all();

		return view('usuarios/index', compact('usuarios'));
	}

	public function crear()
	{
		return view('usuarios.agregar');
	}

	public function guardar(Request $request)
	{
		$datos = $request->validate([
           'email'=>'required|unique:users',
           'nombre'=>'required',
           'password'=>'required|min:6',
           'nivel'=>'required'
    	]);
    	$usuario = User::create($datos);

		return redirect('usuarios/index');
	}


	public function editar(User $usuario)
	{
		return view('usuarios.editar', compact('usuario'));
	}

	public function actualizar(User $usuario, Request $request)
	{
		$datos = $request->validate([
           'email'=>'required|unique:users,email,'.$usuario->id,
           'nombre'=>'required',
           'password'=>'required|min:6',
           'nivel'=>'required'
    	]);
    	$usuario->update($datos);

		return redirect('usuarios/index');
	}

	public function eliminar(User $usuario)
	{
		$usuario->delete();
		

		return back();
	}
}
