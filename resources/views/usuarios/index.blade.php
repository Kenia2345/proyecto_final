<!DOCTYPE html>
<html>
<title>Los paisas</title>
<meta charset="UTF-8"><!-- 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="/"><span class="w3-bar-item w3-hover-red">Los Paisas</span></a>
                      <div>
                      <form action="/logout" method="post">
                        {{ csrf_field() }}
                        <button class="w3-button w3-hover-red w3-right">Cerrar Sesión</button>
                        <!--<button class="btn btn-default btn-flat">Cerrar Sesión</button>-->
                      </form>
                      </div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w2-row">
    <div class="w3-col s5">
      <img src="/../img/perfil.png" class="w3-circle w3-margin-right" style="width:50px">
    </div>
    <div class="w3-col s7 w3-bar">
      <span>Administrador
    </div>
  </div>
  <hr>
   <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="/panel" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i> Home</a>
    <a href="index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Usuarios</a>  
    <a href="../categorias/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-square"></i> Categorias</a>
    <a href="../productos/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-product-hunt"></i> Productos</a>
    <a href="../pedidos/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-truck"></i>  Pedidos</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h3><b> Usuarios</b></h3>
  </header>

<div class="w3-container"> <!--agregar -->

  <h5> 
    <imput type="button" onclick="location='agregar'"/> 
    <button class="w3-button w3-black">Agregar</button></h5>

  <table class="w3-table-all w3-text-theme w3-centered w3-theme-d1">
    <thead>
      <tr class="w3-orange">
        
        <th>Nombre</th>
        <th>Correo</th>
        <th>Nivel</th>
        
        <th>Opciones</th>
      </tr>
    </thead>
    @foreach($usuarios ?? [] as $usuario)
    <tr>
      <td>{{ $usuario->nombre }}</td>
      <td>{{ $usuario->email }}</td>
      <td>{{ ucfirst($usuario->nivel) }}</td>
      <td>
          <a href="{{ route('usuarios.editar', $usuario) }}" class="w3-button w3-orange">&nbsp;&nbsp;Editar&nbsp;&nbsp;</a>
          <form action="{{ route('usuarios.eliminar', $usuario) }}" method="post">
            {{ method_field('delete') }}
            {{ csrf_field () }}
            <button type="submit" class="w3-button w3-red">Eliminar</button>
          </form>
      </td>
    </tr>
    @endforeach
  </table>
  <br>
  <br>

</div>
<br><br><br>
    <br>

  <!-- foother -->
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange"></h5>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red"></h5>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange"></h5>
      </div>
    </div>
  </div>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>