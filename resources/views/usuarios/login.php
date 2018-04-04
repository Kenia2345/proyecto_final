<?php
/*
   session_start();//Para acceder a las variables de sesión
   if(isset($_SESSION["user"])){//Verifica si la variable de sesión que esta entre corchetes esta definida
   header("location:index.php");
   }
*/
   ?>
<!doctype html>
<html>
   <head>
      <title>iniciar sesion</title>
      <meta charset="utf-8">

      <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

      <!--<link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--     <script src="js/bootstrap.min.js"></script>-->
      <!--<script src="js/jquery-3.2.1.min.js"></script>-->
   </head>
   <body>
       <div class="page-container">
            <h1>iniciar sesion</h1>
            <form action="" method="post">
               <label for="usuario">Correo:</label><br/><br/>
                <input type="text" name="username" class="username" placeholder="ejemplo"><br/><br/>
                <label for="usuario">Contraseña:</label><br/><br/>
                <input type="password" name="password" class="password" placeholder="contraseña"><br/><br/>
                <a href="#"><button type="submit"><a href="#">iniciar cesion</button></a><br/><br/>
                <div class="error"><span>+</span></div>
            </form>
            <a href="#"><button type="submit"><a href="#">registrarse</button></a><br/><br/>
        </div>

      <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

   </body>
      <script type="text/javascript">
      $(document).ready(function(){
         $('#login').click(function(){
             
            var user=$('#user').val();
            var pass=$('#pass').val();
            console.log(user);
            console.log(pass);
            if($.trim(user).length > 0 && $.trim(pass).length > 0){
               $.ajax({
                  url:"logueame.php",
                  method:"POST",
                  data:{user:user, pass:pass},
                  cache:"false",
                  beforeSend:function(){
                     $('#login').val("Conectando...");
                  },
                  success:function(data){
                     
                     if(data==="no_existe"){
                        alert('El usuario no existe');

                        var ctrl=$("#result");
                        ctrl.empty();
                        ctrl.append("NO ESTA");
                        ctrl.show();
                     }
                     else
                     {           
                      //window.location.replace("index.php");
                      var url = "index.php";    
                        $(location).attr('href',url);
                        
                     }
                  },
                  error:function(msg){
                     console.log(msg);
                  }
               });
            }
         });
      });
      </script>      
</html>
