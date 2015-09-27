
<?php

    include 'header.php';
    
    if(isset($_GET['idequipo'])){
        $id = $_GET['idequipo'];   
    }
    $db = new Database;
    $result = $db->select_equipo($id);
    $result2 = $db->select_jugadores();
    
    //var_dump($result);

?>
<div class="container">
<div class="row">
    <!--FONDO-->
<img id='img-fondo' src='img/fondo2.jpg'  class="img-responsive">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  
        <div class="row">
            
            
           <!--DATOS EQUIPO-->
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  
                <div class="thumbnail thum-equipo">
                    
                    <img class='img-responsive pull-right' width='35%' height='50%' src="img/escudo2-p.jpg" alt="">
                    <h4 class='tit-noticias text-center'><u>Datos del club</u></h4>
                    <h5>Año de fundación: <b>1998</b></h5>
                    <h5>Presidente: <b>Andrés Sánchez</b>
                    <h5>Palmarés: <b>1 Trofeo Charro (2010)</b></h5>
                    <h5>Sede: <?php
                                    foreach($result as $equipo){
                                    extract($equipo);
                                    echo "<b>$localidad</b>";
                                    }
                                   ?> 
                    </h5>
                    <hr>
                    <h5>Estadio: <?php
                                    foreach($result as $equipo){
                                    extract($equipo);
                                    echo "<b>$estadio</b>";
                                    }
                                   ?> 
                    </h5>
                    <img class='img-responsive' src='img/san-casto.jpg' alt="">               
    
                    <div class="caption">
                        <p>El estadio fue construido en 1997 por el arquitecto salmantino Gregorio Arandina. Terreno de juego de césped artificial con unas dimensiones 105x68 y campos de entrenamiento de fútbol y fútbol 7. Grada tribuna con capacidad para 700 espectadores</p> 
                    
                    </div>
                </div>
               
                </div>
           
           <!--FOTO PLANTILLA-->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="thumbnail thum-equipo2">
                    <h1 class='tit-noticias text-center' >Barbadillo C.F.</h1>
      
                    <img src="img/equipo1.jpg" alt="">
                    
                <div class="caption">         
                </div>
                
            </div>
            </div> 
           
            </div>
        </div>  
</div>

<!--PLANTILLA-->
<div class="row"> 
    
    <div class="col-sm-11 col-md-11 col-lg-11">  
        <h2 id='plantilla'>Plantilla</h2>
    </div>
</div>
  <div class="row">
   
  <div class="col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
    

    <?php
        
    
        foreach($result2 as $jug){
            extract($jug);
            $idjug = $idjugador;
            $idjugador++;
        
    ?>
    <div class="col-xs-4 col-md-2 col-md-2 col-lg-2">
      <div class="thumbnail thum-jugador">
          
              <?php
                $result3 = $db->select_jugador($idjug);
                foreach($result3 as $jug){
                            extract($jug);
                            echo "<h4 class='text-center'><b>$nombr</b></h4>";
                        }
            
                echo "</h4>
                     <img class='img-responsive' src='img/$idjug.png' alt=''>
                     <div class='caption'>";
                        
                        foreach($result3 as $jug){
                            extract($jug);
                            echo "<h5>Dorsal&nbsp;<b><span class='badge'>$dorsal</span></b></h5>"
                                    . "<h5><b>$posicion</b></h5>";
                        }
                ?> 
          
               
            </div>
      </div>
    </div>
<?php 
        } // Cierro foreach
?>
   </div>
</div>
 <!--FOOTER-->
   <div id='footer' class="row">
        <div id='footer-panel' class=''>
            <span>&copy; Sologoles 2015</span>
        </div>
   </div>    