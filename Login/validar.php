<?php

if(!empty($_POST["btn"])){
    
    $conexion = mysqli_connect("localhost","root","","login");

    $USUARIO = $_POST['usuario'];
    $PASSWORD = $_POST['password'];

    $consulta = "SELECT * FROM usuarios where usuario = '$USUARIO' and password = '$PASSWORD' ";
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