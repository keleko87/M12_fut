<?php
session_start();
require_once 'modelo/database.php';   

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];   
    }
    if(isset($_POST['dorsal'])){
        $dorsal = $_POST['dorsal'];
    }
    if(isset($_POST['posicion'])){
        $posicion = $_POST['posicion'];
    }    
    if(isset($_POST['equipo'])){
        $equipo = $_POST['equipo'];
        
    }else{
        $_SESSION['error'] = "Debes rellenar los campos";
        
    }
//    if(dorsal == 0){
//        
//        $_SESSION['error'] = "Dorsal no disponible";
//        header("Location: form_jugador.php");
//    }
    $db = new Database();
    $db->insert_jugador($nombre, $dorsal, $posicion, $equipo);
    
    header("Location: editar_jugador.php");
?>
