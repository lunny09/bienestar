<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados por la solicitud AJAX
    $id = $_POST['id'];
    $estado = $_POST['estado'];

    // Realizar la inversión del estado
    $nuevoEstado = ($estado === 'Activo') ? 'Inactivo' : 'Activo';

    // Realizar acciones adicionales según el estado actual y el ID
    // ...

    // Devolver la respuesta (puedes incluir un mensaje u otros datos según sea necesario)
    echo 'Estado actualizado correctamente';
}
