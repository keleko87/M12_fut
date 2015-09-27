<?php
session_start();
require_once 'modelo/database.php';   

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
    if($local === $visitante){
        
        $_SESSION['error'] = "Error! El equipo local y el visitante deben ser distintos";
        header("Location: form_partido.php");
    }
    $db = new Database();
    $db->insert_partido($local, $visitante, $resultado, $fecha);
    
    header("Location: editar_partido.php");
?>
