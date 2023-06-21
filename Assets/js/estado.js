$(document).ready(function() {
    $('#estado').change(function() {
        var selectedValue = $(this).val(); // Obtener el valor seleccionado

        // Realizar acciones en función del valor seleccionado
        if (selectedValue === "1") {
            // Acción para el estado "Activo"
            console.log("Estado activo seleccionado");
        } else if (selectedValue === "2") {
            // Acción para el estado "Inactivo"
            console.log("Estado inactivo seleccionado");
        }
    });
});
