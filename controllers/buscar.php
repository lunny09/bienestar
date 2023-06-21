<?php
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

    // Verificar si se obtuvieron resultados
    if (mysqli_num_rows($query) > 0) {
        // Recorrer los resultados con mysqli_fetch_array()
        while ($row = mysqli_fetch_array($query)) {
            // Realizar las operaciones necesarias con cada registro
            // ...
        }
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "Error en la consulta SQL: " . mysqli_error($mysqli);
    exit();
}
?>
