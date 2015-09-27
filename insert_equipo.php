<?php
session_start();
require_once 'modelo/database.php';   

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];   
    }
    if(isset($_POST['estadio'])){
        $estadio = $_POST['estadio'];
    }
    if(isset($_POST['localidad'])){
        $localidad = $_POST['localidad'];
    }else{
        $_SESSION['error'] = "Debes rellenar los campos";
        
    }
    
    $db = new Database();
    $db->insert_equipo($nombre, $estadio, $localidad);

    header("Location: editar_equipo.php?nombre=$nombre");
?>
