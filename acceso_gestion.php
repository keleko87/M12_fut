<!DOCTYPE html>
<html>
    <head>
        <?php 
            include 'includes/header.php';
        ?>
        <title></title>
    </head>
    <body>
    <form class="navbar-form navbar-right" role="form" method="post" action="controlador/validador.php">
        <div class="form-group">
          <input type="text" name="nombre" placeholder="Nombre" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" name="pass" placeholder="Contraseña" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
    </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
