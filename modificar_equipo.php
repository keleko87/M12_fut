<?php
session_start();
   
   include 'modelo/database.php';
    
    if(isset($_GET['idequipo'])){
        $idequipo = $_GET['idequipo'];
        //echo $idequipo;
    }
    
    $db = new Database();
    $result = $db->select_equipo($idequipo);
   
    
    if(mysqli_num_rows($result)==0){
            echo "El equipo no existe";
    }
    else{
        $fila = mysqli_fetch_array($result);
        extract($fila);
        //var_dump($fila);
        echo "<form method='post' action='actualizar_equipo.php'>
                    <input type='hidden' name='idequipo' value='$idequipo'/><br/>
                    Nombre de Equipo:<input type='text' name='nombre' value='$nombre'/><br/>
                    Estadio:<input type='text' name='estadio' value='$estadio'/><br/>
                    Localidad:<input type='text' name='localidad' value='$localidad'/><br/>";
 
        echo "<input type='submit' value='Actualizar' name='actualizar'/>
             </form>";
    }
    
    echo "<a href='editar_equipo.php'>Volver a página anterior</a>";

    
?>