<?php
// Configuración de la conexión a la base de datos MySQL
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificación de la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Operación de Actualización (Editar)
function updateTask($taskId, $newDescription) {
    global $conn;
    $sql = "UPDATE tasks SET description = '$newDescription' WHERE id = $taskId";
    $conn->query($sql);
}

// Operación de Eliminación
function deleteTask($taskId) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE id = $taskId";
    $conn->query($sql);
}

// Ejemplo de uso
updateTask(1, "Nueva descripción de la tarea");
deleteTask(2);

// Cierre de la conexión a la base de datos
$conn->close();
?>