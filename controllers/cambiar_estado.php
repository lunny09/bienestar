<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el estado actual enviado por el formulario
    $estado = $_POST['estado'];

    // Realizar la inversión del estado
    if ($estado == "Activo") {
        $nuevoEstado = "Inactivo";
    } else {
        $nuevoEstado = "Activo";
    }

    // Simulación de la actualización del estado en la base de datos u otros procesos necesarios
    // Reemplaza esta sección con tu lógica real de actualización del estado

    // Mostrar mensajes de depuración
    var_dump($_POST['estado']);
    var_dump($nuevoEstado);

    // Redirigir al usuario o mostrar un mensaje de éxito
    header("Location: ../views/admin/admin.php?mensaje=Estado_actualizado&estado=$nuevoEstado");
    exit();
}
?>
