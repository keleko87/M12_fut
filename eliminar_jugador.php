<?php
    include 'modelo/database.php';       

    if(isset($_GET['idjugador'])){
        $idjugador= $_GET['idjugador'];
    }
    $db = new Database();
    $db->eliminar_jugador($idjugador);
    
    header("Location: editar_jugador.php");
    
    ?>