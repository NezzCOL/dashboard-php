<?php

include('../login/db.php');

if (isset($_POST['registrar'])) {
    if (strlen($_POST['tip_doc']) >= 1 && strlen($_POST['num_doc']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['tip_rol']) >= 1 && strlen($_POST['contraseña']) >= 1) {
        $MD5contraseña = md5($contraseña);

        $tip_doc = $_POST['tip_doc'];
        $num_doc = $_POST['num_doc'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $tip_rol = $_POST['tip_rol'];
        $contraseña = $_POST['contraseña'];

        $consulta = "INSERT INTO asistencias(documento, numero_documento, nombre, apellido, usuario, correo, telefono, Rol, contraseña) VALUES ('$tip_doc','$num_doc','$nombre','$apellido','$usuario','$correo','$telefono','$tip_rol','$MD5contraseña')";
        $resultado = mysqli_query($conexion,$consulta);
        
        header("location: ../comunes/registro-usuario.php");
    }
}

?>