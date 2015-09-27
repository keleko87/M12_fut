<?php
    require_once 'header.php';
    require_once 'modelo/database.php';
     $db = new Database;
    $result = $db->select_equipos();
    //var_dump($result);
?>
<div class="container">
    <div class='row'>
        <div id='inicio' class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div id='img-index' class='col-lg-12 col-md-12 col-sm-12 col-xs-12' >
                <img src='img/estadio-fondo.jpg' id='estadio-fondo' class='img-responsive' alt='imagen fondo'>
            </div>
            <div id='titulo' class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center' >
                <h1>Solo Goles</h1>
                <h3>La web del fútbol modesto en Salamanca</h3>
            </div>
            
        </div>
    </div>
    
<!--NOTICIAS-->
<div class='row' id='actualid'>
    <div id='actualidad' class='col-xs-11 col-sm-11 col-md-11 col-lg-11'>
        <h2>Actualidad</h2>
    </div>
</div>

<!--THUMBNAILS-->
    
<div class="row noticias">
 
  <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
      
    <div class="thumbnail thum-noticia">
        <a href='noticia1.php'><h3 class='tit-noticias'>Se decide la liga en el Trofeo Charro</h3></a>
      <img src="img/portero.jpg" alt="">
      <div class="caption">
        <p>
            Última jornada de liga en el Trofeo Charro, y todavía queda todo por decidir. A estas alturas del año, y aún no hay un campeón asegurado y equipos descendidos.
        </p>
        <p><a href="noticia1.php" class="btn btn-default" role="button">Leer más</a></p>
      </div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail  thum-noticia">
        <a href='noticia1.php'><h3 class='tit-noticias'>Bar Jaleo y Nuevo Naharros se juegan el título</h3></a>
      <img src="img/12.jpg" alt="">
      <div class="caption">
        <p>Los conjuntos se jugarán el todo por el todo a lo largo de este fin de semana: Bar Jaleo y Nuevo Naharros pueden acabar como campeones en función de los resultados que terminen dándose.
        </p>
        <p><a href="noticia2.php" class="btn btn-default" role="button">Leer más</a></p>
      </div>
    </div>
  </div>
     
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pull-right">
        <div class="thumbnail  thum-noticia">
            <h4 class='tit-resultado text-center'><b>Resultados</b></h4>
        <div class="caption">
        <?php

        $db = new Database();
        $result = $db->select_partidos();
        $result2 = $db->select_equipos();
        ?>
            <table class='table table-bordered tabla-result'>
                <tbody>
          
        <?php
            foreach($result as $partido){
                extract($partido);
                    //var_dump($partido);
                echo "<tr><td><h6>$loc</h6></td><td><h6>$resultado</h6></td><td><h6>$visit</h6></td>
                        </tr>"; 
            }
        ?>
                 
                </tbody>
            </table>
          

            <!--clasificacion-->
            
            <h4 class="tit-resultado text-center"><b>Clasificación</b></h4>
               <table class='table table-bordered tabla-result'>
                <tbody>
                    <tr >
                        <th class="text-center">Pos</th>
                        <th class="text-center">Equipo</th>
                        <th class="text-center">PJ</th>
                        <th class="text-center">Ptos</th>
                    </tr>
                    
                    <?php
                       
                        foreach($result2 as $equipo){
                            extract($equipo);
                                //var_dump($partido);
                            echo "<tr><td><h6>$idequipo</h6></td><td><h6>$nombre</h6></td><td><h6>10</h6></td><td><h6>25</h6></td>
                                    </tr>"; 
                        }
                    ?>
                    
                </tbody>
            </table>
            
             
            
        </div>
  
    </div>
  </div>
    
    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
      
    <div class="thumbnail">
        <a href='noticia1.php'><h3 class='tit-noticias'>El Figón Charro puede ser expulsado del trofeo</h3></a>
      <img src="img/e4.jpg" alt="">
      <div class="caption">
        <p>El Figón Charro ha sido expulsado del trofeo Charro de manera definitiva a pesar de quedar solamente una jornada para el final del campeonato.  
        </p>
        <p><a href="noticia1.php" class="btn btn-default" role="button">Leer más</a></p>
      </div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
        <a href='noticia1.php'><h3 class='tit-noticias'>Publistar Helmántica confía en la unión del equipo para evitar el descenso</h3></a>
      <img src="img/unidos.jpg" alt="">
      <div class="caption">
        <p>Después de una temporada extraña en lo deportivo y en lo extradeportivo para el Publistar Helmántica, el equipo intentará no descender de categoría.
        </p>
        <p><a href="noticia2.php" class="btn btn-default" role="button">Leer más</a></p>
      </div>
    </div>
  </div>
   
    
     <!--PUBLI-->
   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pull-right">
    <div class="thumbnail">
        <a href='http://www.trangoworld.com/es/'><img class="img-responsive"  src="img/pub4.jpg" alt=""></a>
        <hr>
       
        <a href='http://www.juegos.com/juego/penalty-shooters'><h5 class="text-center">Juega a <b>Penalty Soccer</b></h5><img class="img-responsive" src="img/juego.png" alt=""></a>
        
        
    </div>
  </div>
    
</div> 
    <!--FOOTER-->
   <div id='footer' class="row">
        <div id='footer-panel' class=''>
            <span>&copy; Sologoles 2015</span>
        </div>
   </div>    
</div> <!-- CONTAINER-->


     
</body>
</html>
