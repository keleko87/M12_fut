<?php
    require_once 'modelo/database.php';

    if(isset($_POST['idjugador'])){
        $idjugador = $_POST['idjugador']; 
        echo $idjugador;
    }
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
        
    $db = new Database();
    $db->modificar_jugador($idjugador, $nombre, $dorsal, $posicion, $equipo);
    header("Location: editar_jugador.php");

    //echo "<a href='editar_jugador.php'>Volver a página anterior</a>";
    
?>