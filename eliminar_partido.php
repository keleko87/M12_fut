<?php
    include 'modelo/database.php';       

    if(isset($_GET['idpartido'])){
        $idpartido = $_GET['idpartido'];
    }
    $db = new Database();
    $db->eliminar_partido($idpartido);
    
    header("Location: editar_partido.php");
    
    ?>