<?php
session_start();
   
   include 'modelo/database.php';
    
    if(isset($_GET['idjugador'])){
        $idjugador = $_GET['idjugador'];
    }
    
    $db = new Database();
    $db2 = new Database();
    $result = $db->select_jugador($idjugador);
    $result2 = $db2->select_jugadores();
    $result3 = $db2->select_equipos();
    
    if(mysqli_num_rows($result)==0){
            echo "El jugador no existe";
    }
    else{
        $fila = mysqli_fetch_array($result);
        extract($fila);
        //var_dump($fila);
        echo "<form method='post' action='actualizar_jugador.php'>
                    <input type='hidden' name='idjugador' value='$idjugador'/><br/>
                    Nombre:<input type='text' name='nombre' value='$nombr'/><br/>
                    
                    Dorsal:<select name='dorsal'>
                        <option value='$dorsal'>$dorsal</option>";
                    
                    $dorsales = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23];
        
                    for($i=1; $i<count($dorsales); $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                    
                    echo "</select> <br/>";
                        
                    echo "Posición:<select name='posicion'>";
                        echo "<option value='$posicion'>$posicion</option>";
                        echo "<option value='portero'>portero</option>";
                        echo "<option value='defensa'>defensa</option>";
                        echo "<option value='medio'>medio</option>";
                        echo "<option value='delantero'>delantero</option>";
                    
                    echo "    </select> <br/>
                    Equipo:<select name='equipo'>";
                    foreach($result3 as $fila3){
                        extract($fila3);
                        echo "<option value='$idequipo'>$nombre</option>";
                    }
                    echo "    </select> <br/>";
 
        echo "<input type='submit' value='Actualizar' name='actualizar'/>
             </form>";
    }

    echo "<a href='editar_jugador.php'>Volver a página anterior</a>";
    
    
?>