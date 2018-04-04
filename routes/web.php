<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "WelcomeController@index");
Route::get('/menu', 'WelcomeController@menu');
Route::get('/menu/tortas', 'WelcomeController@tortas');
Route::get('/menu/enchiladas', 'WelcomeController@enchiladas');
Route::get('/menu/tostadas', 'WelcomeController@tostadas');
Route::get('/menu/platillos', 'WelcomeController@platillos');
Route::get('/menu/otros', 'WelcomeController@otros');
Route::get('/menu/bebidas', 'WelcomeController@bebidas');
Route::get('/menu/botanas', 'WelcomeController@botanas');
Route::get('/menu/postres', 'WelcomeController@postres');

/*Route::get('/menu/promociones', 'WelcomeController@promociones');*/


Route::get('/nosotros', 'WelcomeController@nosotros');

Route::get('/usuarios/index', function () {
    return view('usuarios/index');
});

// esto se tiene que cambiar
Route::get('/categorias/index', "CategoriasController@index");
Route::get('/categorias/agregar', "CategoriasController@crear")->name("categorias.crear");
Route::post('/categorias/guardar',"CategoriasController@guardar")->name("categorias.guardar");
Route::get('/categorias/editar/{categoria}',"CategoriasController@editar")->name("categorias.editar");
Route::patch('/categorias/actualizar/{categoria}',"CategoriasController@actualizar")->name("categorias.actualizar");
Route::delete('/categorias/eliminar/{categoria}',"CategoriasController@eliminar")->name("categorias.eliminar");

Route::get('/productos/index', "ProductosController@index")->middleware('role:admin|empleado');
Route::get('/productos/agregar', "ProductosController@crear")->name("productos.crear")->middleware('role:admin');
Route::post('/productos/guardar',"ProductosController@guardar")->name("productos.guardar")->middleware('role:admin');
Route::get('/productos/editar/{producto}',"ProductosController@editar")->name("productos.editar")->middleware('role:admin|empleado');
Route::patch('/productos/actualizar/{producto}',"ProductosController@actualizar")->name("productos.actualizar")->middleware('role:admin|empleado');
Route::delete('/productos/eliminar/{producto}',"ProductosController@eliminar")->name("productos.eliminar")->middleware('role:admin');

Route::get('/pedidos/index', function () {
    return view('pedidos/index');
});

 Route::get('/modulo', function () {
    return view('modulo');
});


Route::get('/usuarios/index', "UsuariosController@index");
Route::get('/usuarios/agregar', "UsuariosController@crear")->name("usuarios.crear");
Route::post('/usuarios/guardar',"UsuariosController@guardar")->name("usuarios.guardar");
Route::get('/usuarios/editar/{usuario}',"UsuariosController@editar")->name("usuarios.editar");
Route::patch('/usuarios/actualizar/{usuario}',"UsuariosController@actualizar")->name("usuarios.actualizar");
Route::delete('/usuarios/eliminar/{usuario}',"UsuariosController@eliminar")->name("usuarios.eliminar");


Route::get('/pedidos/agregar', function () {
    return view('pedidos/agregar');
});

Route::get('/pedidos/editar', function () {
    return view('pedidos/editar');
});




Auth::routes();

Route::get('/panel', 'HomeController@index');
