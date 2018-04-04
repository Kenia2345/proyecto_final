<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; // Para que funcione la consulta con DB query builder
use App\Models\Category; // Para que funcionen las consulstas con Eloquent

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hacemos la consulta
        //$categorias = DB::table('categorias')->get(); // trae todas las categorias de la tabla con todas las columnas es como un select * from categorias
        // $categorias = DB::table('categorias')->select(['id', 'nombre'])->get(); // trae todas las categorias pero solo el id y el nombre
        // $categorias = DB::table('categorias')->orderBy('nombre', 'desc')->get(); // trae todo, ordenado por nombre de la z a la a
        // $categoria = DB::table('categorias')->where('id', '=', 2)->first(); // trae el primer resultado donde el id = 2
        // $categorias = DB::table('categorias')->where('nombre', 'LIKE', "%torta%")->get(); // trae el todas las filas donde el nombre tenga  torta, ej. tortas torta torta de etc
        // en este caso se usaria la primer opcion
        // una forma mas elegante es usando Modelos -> php artisan make:model Models/Category
        // ya que se hizo el modelo
        // se puede hacer
        
        //$categorias = Category::all(); // lo mismo que el de la linea 19
        // otros tipos de consutas
        //$categoria = Category::first();// lo mismo que el de la linea 22
        //$categorias = Category::select(['id', 'nombre'])->get() // lo mismo que la linea 20
        //$categorias = Category::orderBy('nombre', 'desc')->get()// == linea 21
        //$categorias = Category::where('id', '=', '2')->get()// == linea 22
        //$categorias = Category::where('nombre', 'LIKE', "%torta%")->get()// == linea 23

        // para probar si sigue funcionando
        $categorias = [];

        // ya tenemos la consulta

        // mostramos la vista y le pasamos la consulta
        return view('categorias.index', compact('categorias')); // hasta ahi esa seria lo que hace el controlador


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categoria)
    {
        // recibimos un objeto categoria y lo retornamos a la vista, es todo asu si tengo mucho por hacer
        // esto solo lo cacha para mostrarlo en el formulario
        return view('categorias.editar', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $categoria, Request $request)
    {
        // este es que le va hacer la actualizacion
        $categoria->update($request->all());

        return view('categorias.editar', $categoria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
