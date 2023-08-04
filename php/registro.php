<?php

include('../login/db.php');

if (isset($_POST['registrar'])) {
    if (strlen($_POST['tip_doc']) >= 1 && strlen($_POST['num_doc']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['tip_rol']) >= 1 && strlen($_POST['contraseña']) >= 1) {

        $tip_doc = $_POST['tip_doc'];
        $num_doc = $_POST['num_doc'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $tip_rol = $_POST['tip_rol'];
        $contraseña = $_POST['contraseña'];

        $consulta = "INSERT INTO asistencias(documento, numero_documento, nombre, apellido, correo, telefono, Rol, contraseña) VALUES ('$tip_doc','$num_doc','$nombre','$apellido','$correo','$telefono','$tip_rol','$contraseña')";
        $resultado = mysqli_query($conexion,$consulta);
        
        header("location: ../comunes/registro-usuario.php");
    }
}

?>