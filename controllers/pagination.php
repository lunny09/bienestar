<?php
function generatePagination($total_paginas, $pagina_actual)
{
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="pagination">';
    
    // Enlace "Anterior"
    if ($pagina_actual > 1) {
        echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . ($pagina_actual - 1) . '" aria-label="Previous">';
        echo '<span aria-hidden="true">&laquo;</span>';
        echo '<span class="sr-only">Previous</span>';
        echo '</a></li>';
    } else {
        echo '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous">';
        echo '<span aria-hidden="true">&laquo;</span>';
        echo '<span class="sr-only">Previous</span>';
        echo '</a></li>';
    }
    
    // Enlaces de páginas
    $max_paginas = 3; // Número máximo de páginas principales a mostrar
    
    $inicio = max(1, $pagina_actual - floor($max_paginas / 2));
    $fin = min($inicio + $max_paginas - 1, $total_paginas);
    
    for ($i = $inicio; $i <= $fin; $i++) {
        if ($i == $pagina_actual) {
            echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . $i . '">' . $i . '</a></li>';
        }
    }
    
    // Enlace "Siguiente"
    if ($pagina_actual < $total_paginas) {
        echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . ($pagina_actual + 1) . '" aria-label="Next">';
        echo '<span aria-hidden="true">&raquo;</span>';
        echo '<span class="sr-only">Next</span>';
        echo '</a></li>';
    } else {
        echo '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Next">';
        echo '<span aria-hidden="true">&raquo;</span>';
        echo '<span class="sr-only">Next</span>';
        echo '</a></li>';
    }
    
    echo '</ul>';
    echo '</nav>';
}

?>
