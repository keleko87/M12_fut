<?php
    include 'modelo/database.php';
    
    $db = new Database();
    $result = $db->select_jugadores();
    //var_dump($result);
    $equipostot = $db->select_equipos();
?>
        <h3>Insertar nuevo Jugador</h3>
        <form action="insert_jugador.php" method="post">
        Nombre&nbsp;<input type="text" name="nombre" value=""/>
       
        Dorsal&nbsp;<select name="dorsal">
    <?php
        $dorsales = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23];
        
        for($i=1; $i<count($dorsales); $i++){
            echo "<option value='$i'>$i</option>";
        }
        
    ?> 
    </select>
         Posicion&nbsp;<select name="posicion">
                <option value='portero'>portero</option>
                <option value='defensa'>defensa</option>
                <option value='medio'>medio</option>
                <option value='delantero'>delantero</option>";
    </select>
          Equipo&nbsp;<select name="equipo">
    <?php
        
        foreach($equipostot as $equipo2){
            extract($equipo2);
            echo "<option value='$idequipo'>$nombre</option>";
        }
    
    ?> 
    </select>
        
        <br/>
        <input type="submit" value="Insertar datos"/>                       
    </form>
<?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    echo "<a href='editar_jugador.php'>Volver a página anterior</a>";
?>
    </body>
</html>