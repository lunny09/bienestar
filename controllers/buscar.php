<?php
// Verificar si se ha enviado un término de búsqueda
if (isset($_GET['busqueda'])) {
    $termino = $_GET['busqueda'];

    // Realizar aquí la lógica de búsqueda con el término proporcionado

    // Ejemplo: búsqueda en un array de elementos
    $elementos = array('Manzana', 'Banana', 'Naranja', 'Piña', 'Fresa');
    $resultados = array();

    foreach ($elementos as $elemento) {
        if (stripos($elemento, $termino) !== false) {
            $resultados[] = $elemento;
        }
    }

    // Imprimir los resultados
    if (count($resultados) > 0) {
        echo "Resultados de la búsqueda:<br>";
        foreach ($resultados as $resultado) {
            echo $resultado . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
}
?>
