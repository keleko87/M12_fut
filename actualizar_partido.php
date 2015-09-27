<?php
    require_once 'modelo/database.php';

    if(isset($_POST['idpartido'])){
        $idpartido = $_POST['idpartido'];   
    }
    if(isset($_POST['local'])){
        $local = $_POST['local'];   
    }
    if(isset($_POST['visitante'])){
        $visitante = $_POST['visitante'];
    }
    if(isset($_POST['resultado'])){
        $resultado = $_POST['resultado'];
    }    
    if(isset($_POST['fecha'])){
        $fecha = $_POST['fecha'];
    }else{
        $_SESSION['error'] = "Debes rellenar los campos";
        
    }
       
        $db = new Database();
        $db->modificar_partido($idpartido, $local, $visitante, $resultado, $fecha);
        header("Location: editar_partido.php");
    
       // echo "<a href='editar_partido.php'>Volver a página anterior</a>";
    
?>