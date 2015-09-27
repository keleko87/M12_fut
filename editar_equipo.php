<?php
session_start();

$admin = $_SESSION['admin'];
echo "<h3>Administrador: $admin</h3><br/>"
        . "<a href='logout.php'>Cerrar Sesión</a>";

    require_once 'modelo/database.php';

    $db = new Database;
    $result = $db->select_equipos();
    //var_dump($result);
    
    if(mysqli_num_rows($result)==0){
            echo "<h4>No existen Equipos en la base de datos</h4>";
            echo "<h5><a href='form_partido.php'>INSERTAR NUEVO EQUIPO</a></5>";
            echo "<h5><a href='admin.php'>Volver a página anterior</a></h5>";
    }
    else{
        // Recorrer las filas devueltas e insertarlas en la tabla
        echo "<h3>Lista de Equipos</h3>";

        echo "<table border='2'>";
        echo "<form action='eliminar_equipo.php' method='post'>";
        echo "<tr><th>ID Equipo</th><th>Nombre</th><th>Estadio</th><th>Localidad</th></tr>";
        foreach($result as $equipo){
                extract($equipo);
                echo "<tr><td>$idequipo</td><td>$nombre</td><td>$estadio</td><td>$localidad</td><td><a href='modificar_equipo.php?idequipo=$idequipo'>Modificar</a></td>
                    <td><a href='eliminar_equipo.php?idequipo=$idequipo'>Eliminar</a></td></tr>";
        }

        echo "<tr><td colspan='4'><a href='form_equipo.php'>DAR DE ALTA NUEVO EQUIPO</a></td>
              <td colspan='2'></td></tr>";
        echo "</form>";
        echo "</table>";
        echo "<br/>";
        
        echo "<a href='admin.php'>Volver a página anterior</a>";
    }
 ?>      