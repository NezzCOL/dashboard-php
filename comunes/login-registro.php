<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/stylejhon.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="formulario">
        <h1>Inicio de sesion</h1>
        <form action="login/validar.php" method="post">
            <div class="username">
                <input type="text" placeholder="Nombre de usuario" name="usuario">
            </div>
            <div class="contraseña">
                <input type="password" placeholder="Contraseña" name="contraseña">
            </div>
            <input type="submit" name="btn" value="Iniciar"><br>
            <?php
                include("login/db.php");
                include("login/validar.php");
            ?>
            <br>
        </form>
    </div>
</body>
</html>