
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Insertar nuevo equipo</h3>
        <form action="insert_equipo.php" method="post">
        Equipo&nbsp;<input type="text" name="nombre" value="" /><br/>
        Estadio&nbsp;<input type="text" name="estadio" value=""/><br/> 
        Localidad&nbsp;<input type="text" name="localidad" value=""/>  
        <br/>
        <input type="submit" value="Insertar datos"/>                       
    </form>
<?php
    
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    echo "<a href='editar_equipo.php'>Volver a página anterior</a>";
?>
    </body>
</html>