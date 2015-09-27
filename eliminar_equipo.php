<?php
    include 'modelo/database.php';       

    if(isset($_GET['idequipo'])){
        $id = $_GET['idequipo'];
    }
    $db = new Database();
    $db->eliminar_equipo($id);
    
    header("Location: editar_equipo.php");
    
?>