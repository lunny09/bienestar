<?php
require("../config/connect_db.php");

// Cambiar el estado del usuario en la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el ID del usuario y el nuevo estado enviado por la solicitud POST
    $usuarioId = $_POST['id'];
    $nuevoEstado = $_POST['estado'];

    // Consulta SQL para actualizar el estado del usuario en la tabla "login"
    $consulta = "UPDATE login SET estado = '$nuevoEstado' WHERE id = $usuarioId";

    // Ejecutar la consulta
    $resultado = mysqli_query($mysqli, $consulta);

    // Verificar si la actualización fue exitosa
    if ($resultado) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    // Si se intenta acceder directamente al archivo sin una solicitud POST, redirige o muestra un mensaje de error
    echo 'Acceso no autorizado';
}
?>
