<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Solo Goles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
  </head>
  
<body> 
<div class='container'>
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
      <ul> 
          <li>
            <form class="navbar-form navbar-left" role="form" method="post" action="controlador/validador.php">
                <div class="form-group">
                  <input type="text" name="nombre" placeholder="Nombre" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Iniciar sesión</button>
            </form>
          </li>
          <li class='pull-right'>
              <a href='index.php'><span class='glyphiconpro glyphiconpro-home'></span>Volver a inicio</a>
          </li>
             
      </ul>
      
    </div>
     
         <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
         
         ?>
   
 </nav>

     