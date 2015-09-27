<?php
session_start();
   
   include 'modelo/database.php';
    
    if(isset($_GET['idpartido'])){
        $idpartido = $_GET['idpartido'];
    }
    
    $db = new Database();
    $result = $db->select_partido($idpartido);
    
    if(mysqli_num_rows($result)==0){
            echo "El partido no existe";
    }
    else{
        $fila = mysqli_fetch_array($result);
        extract($fila);
        //var_dump($fila);
        echo "<form method='post' action='actualizar_partido.php'>
                    <input type='hidden' name='idpartido' value='$idpartido'/>
                        <input type='hidden' name='local' value='$local'/>
                        <input type='hidden' name='visitante' value='$visitante'/>
                    Equipo Local:<input type='text' name='loc' value='$loc' readonly /><br/>
                    Equipo Visitante:<input type='text' name='visit' value='$visit' readonly /><br/>
                    Resultado:<input type='text' name='resultado' value='$resultado'/><br/>
                    Fecha:<input type='date' name='fecha' value='$fecha'/><br/>";
 
        echo "<input type='submit' value='Actualizar' name='actualizar'/>
             </form>";
    }

    echo "<a href='editar_partido.php'>Volver a página anterior</a>";
    
    
?>