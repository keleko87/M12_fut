<?php
    session_start();
$admin = $_SESSION['admin'];
echo "<h3>Administrador: $admin</h3><br/>"
        . "<a href='logout.php'>Cerrar Sesión</a>";

    require_once 'modelo/database.php';
    

    $db = new Database();
    $result = $db->select_jugadores();
    //var_dump($result);
    
    if(mysqli_num_rows($result)==0){
             echo "<h4>No existen jugadores en la base de datos</h4>";
            echo "<h5><a href='form_partido.php'>INSERTAR NUEVO JUGDOR</a></5>";
            echo "<h5><a href='admin.php'>Volver a página anterior</a></h5>";
    }
    else{
        // Recorrer las filas devueltas e insertarlas en la tabla
        echo "<h3>Lista de Jugadores</h3>";

        echo "<table border='1' >";
        echo "<form action='eliminar_jugador.php' method='post'>";
        echo "<tr><td>idjugador</td><td>nombre</td><td>dorsal</td><td>posicion</td><td>equipo</td></tr>";

        foreach($result as $jugador){
                extract($jugador);
                //var_dump($jugador);
                echo "<tr><td>$idjugador</td><td>$nombr</td><td>$dorsal</td><td>$posicion</td><td>$nombre</td><td><a href='modificar_jugador.php?idjugador=$idjugador'>Modificar</a></td>
                    <td><a href='eliminar_jugador.php?idjugador=$idjugador'>Eliminar</a></td></tr>";
        }

        echo "<tr><td colspan='3'><a href='form_jugador.php'>INSERTAR NUEVO JUGADOR</a></td>"
            . "<td colspan='2'></td></tr>";
        echo "</form>";
        echo "</table>";
        echo "<br/>";
        
        echo "<a href='admin.php'>Volver a página anterior</a>";
    }
 ?>      