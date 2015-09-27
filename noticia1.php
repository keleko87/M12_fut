<?php
    require_once 'header.php';
    require_once 'modelo/database.php';
     $db = new Database;
    $result = $db->select_equipos();
    //var_dump($result);
?>
<div class="container">
<div class="row noticias">
    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
      
    <div class="thumbnail thum-noticia">
        <a href='noticia1.php'><h3 class='tit-noticias text-center'>Se decide la liga en el Trofeo Charro</h3></a>
      <img src="img/portero.jpg" alt="">
      <div class="caption">
        <p>
            Última jornada de liga en el Trofeo Charro, y todavía queda todo por decidir. A estas alturas del año, y aún no hay un campeón asegurado y equipos descendidos.Dos conjuntos se jugarán el todo por el todo a lo largo de este fin de semana: Elec. Chuchi y PC BOX Bruguel pueden acabar como campeones en función de los resultados que terminen dándose.

            El que mejor lo tiene para hacerse con él es el Elec. Chuchi. En primera posición casi todo el año, los del Chuchi llegan con un punto de ventaja sobre el segundo clasificado. Dependen de ellos mismos. Si son capaces de conseguir la victoria, serán campeones. Se miden al Café El Ave, conjunto de la zona baja de la clasificación, por lo que a priori, no deberían tener problemas para conseguir el título.

            Otro que tiene opciones es el PC BOX Bruguel. No depende de sí mismo. Tiene que esperar un pinchado del líder en forma de empate o derrota para poder aspirar a acabar como campeón. Deben ganar y esperar una sorpresa en el otro partido. Su encuentro será complicado. Juegan a domicilio ante el Mesón Consultorio Quesería La Antigua, conjunto que siempre acaba poniendo en apuros a sus rivales.
        </p>
        <p><a href="index.php" class="btn btn-default" role="button">Volver</a></p>
      </div>
    </div>
      
  </div>
    
    
</div>
</div>