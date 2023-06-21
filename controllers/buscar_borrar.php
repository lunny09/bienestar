<?php
if (isset($_GET['idborrar']) && $_GET['idborrar'] == 2) {
    $id = $_GET['id']; // Obtener el ID del registro a eliminar

    // Realizar la eliminación del registro utilizando el ID
    $eliminar = mysqli_query($mysqli, "DELETE FROM login WHERE id = $id");

    // Verificar si la eliminación fue exitosa y redirigir a la página actual
    if ($eliminar) {
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    } else {
        // Mostrar un mensaje de error si la eliminación falló
        echo "Error al eliminar el registro.";
    }
}

$registros_por_pagina = 5;
$pagina_actual = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// Obtener el término de búsqueda si se ha enviado
$term = isset($_GET['search']) ? $_GET['search'] : '';

// Consulta SQL para obtener los registros filtrados por término de búsqueda y estado activo
$sql = "SELECT * FROM login WHERE cedula LIKE '%$term%' AND estado = 1 LIMIT $offset, $registros_por_pagina";
$query = mysqli_query($mysqli, $sql);

if ($query) {
    // Consulta SQL para contar el total de registros filtrados por término de búsqueda y estado activo
    $total_registros = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM login WHERE cedula LIKE '%$term%' AND estado = 1"));

    $paginas_totales = ceil($total_registros / $registros_por_pagina);
} else {
    echo "Error en la consulta SQL: " . mysqli_error($mysqli);
    exit();
}
?>
