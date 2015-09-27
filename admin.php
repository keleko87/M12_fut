<?php
session_start();
$admin = $_SESSION['admin'];

?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
  </head>
 
<body> 
  <!--FONDO-->
    <img id='img-fondo' src='img/fondo2.jpg' width='100%' class="img-responsive">

<div class="container">
<div class="row">   
  <div class='col-lg-8 col-md-8 col-sm-8 col-xs-6'>
      <div class="well well-mod">
          <h4>
                  <?php
                  echo "Administrador: <b>$admin</b>";
                  ?>
           </h4>

      </div>  
   </div>           
   
    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-6'>
      <div class="well well-mod">
          <h4>
              <a href="logout.php">Cerrar Sesión</a>
           </h4>

      </div>  
    </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      
    <div class="thumbnail thum-noticia">

         <a href='editar_equipo.php'><h3 class='tit-noticias'>Editar Equipos</h3></a>
        <a href='editar_jugador.php'><h3 class='tit-noticias'>Editar Jugadores</h3></a>
       <a href='editar_partido.php'><h3 class='tit-noticias'>Editar Partidos</h3></a>
        
     
       </div>
    </div>
  
  </div>

</div>
