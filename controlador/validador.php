<?php
session_start();

    require_once '../modelo/database.php';  
    
    if(isset($_POST['nombre']) && (isset($_POST['pass']))){
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
       
    }
    
    $db = new Database();
    $correcto = $db->valida_usuario($nombre, $pass);   // Llamamos al metodo que valida o no al usuario
     
    if($correcto == true){          // Si es correcto     
        $_SESSION['admin'] = $nombre;
        header("Location: ../admin.php");
        
    }else{
        $_SESSION['error'] = "El usuario es incorrecto";
        header("Location: ../login.php");
        
        
    }
   
?>
