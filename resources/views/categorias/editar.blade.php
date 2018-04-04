<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('css/estilosagregar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
</head>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="/"><span class="w3-bar-item w3-hover-red">Los Paisas</span></a>
                      
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w2-row">
    <div class="w3-col s4">
      <img src="/../img/perfil.png" class="w3-circle w3-margin-right" style="width:50px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Administrador
    </div>
  </div>
  <hr>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="/panel" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i> Home</a>
    <a href="/usuarios/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Usuarios</a>
    <a href="/categorias/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-square"></i> Categorias</a>
    <a href="/productos/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-product-hunt"></i> Productos</a>
    <a href="index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-truck"></i>  Pedidos</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <center>
 <h2>editar Categoria</h2>   
  </center>


<form method="post" action="{{route('categorias.actualizar',$categoria)}}">
 {{csrf_field()}}
 {{method_field('patch')}}
  <div class="imgcontainer ">
  </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="container ">
    

    <label><b>Nombre</b></label>
    <input type="text" placeholder="Nombre" name="nombre" value="{{old('nombre', $categoria->nombre)}}" required>
    
    <label><b>Descripcion</b></label>
    <input type="text" placeholder="Descripcion" name="descripcion" value="{{old('descripcion', $categoria->descripcion)}}" required>
        

  </div>

  <div class="container">
    <div class="btn-container">
    <button type="submit" class="btn btn-green">Guardar</button>
    <button type="button" class="btn btn-red">Cancelar</button>
</div>
  </div>
</form>

</body>
</html>
