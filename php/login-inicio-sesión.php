<?php

if(!empty($_POST["btn"])){
    
    $conexion = mysqli_connect("localhost","root","","login");
    $USUARIO = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $MD5contraseña = md5($contraseña);

    $consulta = "SELECT * FROM asistencias where usuario = '$USUARIO' and contraseña = '$MD5contraseña' ";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location: ../dashboard/pagina.php");
    }else{
        echo "<div class='error'>Error, datos incorrectos</div>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>