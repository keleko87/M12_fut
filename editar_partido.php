<?php
session_start();
$admin = $_SESSION['admin'];
echo "<h3>Administrador: $admin</h3><br/>"
        . "<a href='logout.php'>Cerrar Sesión</a>";
    require_once 'modelo/database.php';

    $db = new Database();
    $result = $db->select_partidos();

//    var_dump($result);
    
    if(mysqli_num_rows($result)==0){
            echo "<h4>No existen partidos en la base de datos</h4>";
            echo "<h5><a href='form_partido.php'>INSERTAR NUEVO PARTIDO</a></5>";
            echo "<h5><a href='admin.php'>Volver a página anterior</a></h5>";
    }
    else{
        // Recorrer las filas devueltas e insertarlas en la tabla
        echo "<h3>Lista de Partidos</h3>";

        echo "<table border='1' >";
        echo "<form action='eliminar_partido.php' method='post'>";
        echo "<tr><td>idpartido</td><td>local</td><td>visitante</td><td>resultado</td><td>fecha</td></tr>";

        foreach($result as $partido){
            extract($partido);
                //var_dump($partido);
                echo "<tr><td>$idpartido</td><td>$loc</td><td>$visit</td><td>$resultado</td><td>$fecha</td><td><a href='modificar_partido.php?idpartido=$idpartido&local=$loc&visitante=$visit'>Modificar</a></td>
                    <td><a href='eliminar_partido.php?idpartido=$idpartido'>Eliminar</a></td></tr>";
        
            
        }

        echo "<tr><td colspan='3'><a href='form_partido.php'>INSERTAR NUEVO PARTIDO</a></td>"
            . "<td colspan='2'></td></tr>";
        echo "</form>";
        echo "</table>";
        echo "<br/>";
        
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset( $_SESSION['error']);
        }
        
        echo "<a href='admin.php'>Volver a página anterior</a>";
        
    }
 ?>      