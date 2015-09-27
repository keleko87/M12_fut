<?php 
     require_once 'modelo/database.php';
     $db = new Database;
    $result = $db->select_equipos();
    //var_dump($result);
?>
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
<div class="row">  
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SOLO GOLES</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="trofeo.php"><span class='glyphiconpro glyphiconpro-certificate'></span>Trofeo<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class='glyphiconpro glyphiconpro-soccer_ball'></span>Equipos<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            
                 
              <?php
                foreach($result as $equipo){
                    extract($equipo);
                    echo "<li><a href='$nombre.php?idequipo=$idequipo'>$nombre</a></li>";
                }
              
              ?>
          </ul>
        </li>
        <li><a href="galeria.php"><span class='glyphiconpro glyphiconpro-picture'></span>Galería</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.facebook.com"><span class="glyphiconpro glyphiconpro-nameplate_alt"></span>Redes Sociales</a></li>
        <li><a href="contacto.php"><span class="glyphiconpro glyphiconpro-envelope"></span>Contacto</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-wrench"></span>Gestión</a></li>

      </ul>
    </div>
  </div>
</nav>       
</div> 
</div>