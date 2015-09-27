<?php
    include 'modelo/database.php';
    
    $db = new Database();
    $result = $db->select_equipos();
?>
        <h3>Insertar nuevo partido</h3>
        <form action="insert_partido.php" method="post">
        Equipo Local&nbsp;<select name="local">
    <?php
        
        foreach($result as $equipo){
            extract($equipo);
            echo "<option value='$idequipo'>$nombre</option>";
        }
    
    ?> 
    </select>
    Equipo Visitante&nbsp;<select name="visitante">
    <?php
        
        foreach($result as $equipo){
            extract($equipo);
            echo "<option value='$idequipo'>$nombre</option>";
        }
        
    ?> 
        </select>
        Resultado&nbsp;<input type="text" name="resultado" value=""/>
        Fecha&nbsp;<input type="date" name="fecha" value=""/> 
        <br/>
        <input type="submit" value="Insertar datos"/>                       
    </form>
<?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    echo "<a href='editar_partido.php'>Volver a página anterior</a>";
?>
    </body>
</html>